<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Blog, Category};

class FrontendController extends Controller
{
    function Index(){
        return view('frontend.BloggerHome');
    }

    function Contact(){
        return view('frontend.Contact');
    }

    function About(){
        return view('frontend.About');
    }

    function CategoryPage($id){
        return view('frontend.CategoryPage',[
            'blogs'=>Blog::where('category_id',$id)->get(),
            'category'=>Category::where('id',$id)->first(),
        ]);
    }

    function BlogDetails($id){
        return view('frontend.BlogDetails',[
            'blog'=>Blog::findOrFail($id),
        ]);
    }
}
