<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {

        return view('front.index');
    }

    public function properties()
    {
        return view('front.properties');
    }

    public function property_details($id)
    {


        return view('front.property_details');
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
        return view('front.blogs');
    }

    public function blog_details()
    {
        return view('front.blog_details');
    }
}
