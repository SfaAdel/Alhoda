<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PropertyRequest;
use App\Models\Property;
use App\Models\Tag;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $properties = Property::latest()->paginate(10);

        return view('admin.properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $tags = Tag::all(['id', 'name']);

        return view('admin.properties.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyRequest $request)
    {
        // Handle multiple image uploads
        $imageNames = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '-' . uniqid() . '.' . $image->extension();
                $image->move(public_path('images/Properties'), $imageName);
                $imageNames[] = $imageName;
            }
        }

        $videoName = null;
        if ($request->hasFile('video')) {
            $videoName = time() . '.' . $request->video->extension();
            $request->video->move(public_path('images/Property_videos'), $videoName);
        }

        $bannerImageName = null;
        if ($request->hasFile('banner')) {
            $bannerImageName = time() . '.' . $request->banner->extension();
            $request->banner->move(public_path('images/Property_bannars'), $bannerImageName);
        }

        // Save property details
        $property = Property::create($request->except('images', 'video', '_token') + [
            'images' => json_encode($imageNames),
            'video' => $videoName,
            'bannar' => $bannerImageName,
        ]);

        return redirect()->route('admin.properties.index')->with('success', 'تم اضافة بيانات العقار بنجاح');
    }


    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        //
        return view('admin.properties.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Property $property)
    {
        //
        $tags = Tag::all(['id', 'name']);
        return view('admin.properties.edit', compact('property','tags'));
    }



    /**
     * Update the specified resource in storage.
     */


    public function update(PropertyRequest $request, Property $property)
    {
        // Update the property details except for image, video, and banner
        $property->update($request->except('images', 'video', 'banner', '_token', '_method'));

         // Handle images update
    if ($request->hasFile('images')) {
        $imageNames = [];

        // Loop through the uploaded images
        foreach ($request->file('images') as $image) {
            // Generate a unique name for each image
            $imageName = time() . '-' . uniqid() . '.' . $image->extension();
            // Move the image to the specified folder
            $image->move(public_path('images/Properties'), $imageName);
            // Add image name to the array
            $imageNames[] = $imageName;
        }

        // Convert image array to JSON and save in the database
        $property->update(['images' => json_encode($imageNames)]);
    }

        // Handle video update
        if ($request->hasFile('video')) {
            // Generate a new file name for the video
            $videoName = time() . '.' . $request->video->extension();
            // Move the video to the specified folder
            $request->video->move(('videos/Properties'), $videoName);
            // Update the video field in the database
            $property->update(['video' => $videoName]);
        }

        // Handle banner update
        if ($request->hasFile('banner')) {
            // Generate a new file name for the banner
            $bannerName = time() . '.' . $request->banner->extension();
            // Move the banner image to the specified folder
            $request->banner->move(('images/Property_bannars'), $bannerName);
            // Update the banner field in the database
            $property->update(['banner' => $bannerName]);
        }

        // Redirect to the properties index with a success message
        return redirect()->route('admin.properties.index')->with('success', 'تم تعديل بيانات العقار بنجاح');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        //
        $property->delete();
        return redirect()->route('admin.properties.index')->with('delete', 'تم حذف العقار بنجاح');
    }
}
