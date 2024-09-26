<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Property;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        // Fetch featured properties from the database
        $properties = Property::where('active', 1)->take(6)->get(); // Customize the number

        return view('front.index', compact('properties'));
    }

    public function properties()
    {
        $properties = Property::where('active', 1)->get(); // Customize the number
        $tags = Tag::all();
        return view('front.properties',compact('properties','tags'));
    }

    public function property_details($id)
    {
        // Fetch the main property with its tags
        $property = Property::with('tags')->findOrFail($id);

        // Fetch related properties that share two or more tags with the current property
        $relatedProperties = Property::where('id', '!=', $property->id) // Exclude the main property
            ->whereHas('tags', function ($query) use ($property) {
                // Find properties that share two or more tags with the current property
                $query->whereIn('tag_id', $property->tags->pluck('id'))
                    ->groupBy('property_id') // Group by property to count tags
                    ->havingRaw('COUNT(tag_id) >= 2'); // Only include properties with 2 or more matching tags
            })
            ->limit(3) // Optional: limit the number of related properties
            ->get();

        return view('front.property_details', compact('property', 'relatedProperties'));
    }


    public function filterByTag($tag)
    {
        // Find the tag by name or slug (depending on your implementation)
        $tag = Tag::where('name', $tag)->firstOrFail();

        // Get properties associated with this tag
        $properties = Property::whereHas('tags', function ($query) use ($tag) {
            $query->where('tag_id', $tag->id);
        })->get();

        $tags = Tag::all();

        // Return the filtered properties view
        return view('front.properties', compact('properties', 'tag','tags'));
    }


    public function contact()
    {
        return view('front.contact');
    }

    public function about()
    {

        return view('front.about');
    }

    public function blogs()
    {
        $blogs = Blog::all();
        $tags = Tag::all();
        return view('front.blogs',compact('blogs','tags'));
    }

    public function blog_details($id)
    {
        return view('front.blog_details');
    }
}
