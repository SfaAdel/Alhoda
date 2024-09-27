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
        $blogs = Blog::take(6)->get(); // Customize the number

        return view('front.index', compact('properties', 'blogs'));
    }

    public function properties()
    {
        $properties = Property::where('active', 1)->get(); // Customize the number
        $tags = Tag::all();
        return view('front.properties', compact('properties', 'tags'));
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
        return view('front.properties', compact('properties', 'tag', 'tags'));
    }


    public function contact()
    {
        return view('front.contact');
    }

    public function about()
    {

        return view('front.about');
    }

    public function blogs(Request $request)
    {
        $search = $request->input('search');

        // Get blogs based on search or retrieve all blogs if no search term is provided
        $blogs = Blog::when($search, function ($query) use ($search) {
            return $query->where('main_title', 'like', '%' . $search . '%')
                ->orWhere('short_description', 'like', '%' . $search . '%');
        })
            ->orderBy('created_at', 'desc')
            ->paginate(5); // Paginate the results (5 per page)

        // Get the latest 3 blogs
        $latestBlogs = Blog::orderBy('created_at', 'desc')->take(3)->get();

        // Get properties that share tags with blogs
        $sharedTagProperties = Property::whereHas('tags', function ($query) {
            $query->whereIn('tags.id', function ($query) {
                $query->select('tag_id')->from('blog_tag'); // Assuming pivot table blog_tag
            });
        })
            ->take(2)
            ->get();

        // Get all tags
        $tags = Tag::all();

        // Return the view with the blogs, tags, latest blogs, and shared properties
        return view('front.blogs', compact('blogs', 'tags', 'latestBlogs', 'sharedTagProperties'));
    }


    public function blog_details($id)
    {
        // Fetch the current blog along with its tags
        $blog = Blog::with('tags')->findOrFail($id);

        // Fetch previous and next blog posts based on their IDs
        $previous = Blog::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();
        $next = Blog::where('id', '>', $blog->id)->orderBy('id', 'asc')->first();

        // Fetch related blogs based on tag matching
        $relatedBlogs = Blog::where('id', '!=', $blog->id) // Exclude the current blog
            ->whereHas('tags', function ($query) use ($blog) {
                // Check for tags that match the current blog's tags
                $query->whereIn('tag_id', $blog->tags->pluck('id'))
                    ->groupBy('blog_id') // Group by blog_id
                    ->havingRaw('COUNT(tag_id) >= 2'); // Only include blogs with 2 or more matching tags
            })
            ->limit(2) // Limit the number of related blogs
            ->get();

        // Fetch related properties that share tags with the current blog
        $relatedProperties = Property::whereHas('tags', function ($query) use ($blog) {
            $query->whereIn('tag_id', $blog->tags->pluck('id'));
        })->limit(2)->get();

        // Fetch the latest 3 blogs
        $latestBlogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();

        // Pass data to the view
        return view('front.blog-details', compact('relatedProperties', 'latestBlogs', 'blog', 'relatedBlogs', 'previous', 'next'));
    }

    public function filterBlogsByTag($tag)
    {
        // Find the tag by name or slug (depending on your implementation)
        $tag = Tag::where('name', $tag)->firstOrFail();

        // Get properties associated with this tag
        $blogs = Blog::whereHas('tags', function ($query) use ($tag) {
            $query->where('tag_id', $tag->id);
        })->paginate(5);

        $tags = Tag::all();
        // Get the latest 3 blogs
        $latestBlogs = Blog::orderBy('created_at', 'desc')->take(3)->get();

        // Get properties that share tags with blogs
        $sharedTagProperties = Property::whereHas('tags', function ($query) {
            $query->whereIn('tags.id', function ($query) {
                $query->select('tag_id')->from('blog_tag'); // Assuming pivot table blog_tag
            });
        })
            ->take(2)
            ->get();

        // Return the filtered properties view with additional data
        return view('front.blogs', compact('blogs', 'tag', 'tags', 'latestBlogs', 'sharedTagProperties'));
    }
}
