<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Banner;

class HomeController extends Controller
{
    //
    function index()
    {
        $data = [
            'services'    => Service::limit(4)->get(),
            'blog'    => Blog::limit(4)->get(),
            'banner'    => Banner::get(),
            'content' => 'home/home/index'
        ];
       return view('home.layouts.wrapper', $data);

    }


    function service()
    {
        $data = [
            'services'    => Service::get(),
            'content' => 'home/services/index'
        ];
       return view('home.layouts.wrapper', $data);

    }

}
