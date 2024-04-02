<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog.index',[
            'blogs'=>Blog::where('blogger_id', Auth::id())->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create', [
            'categories'=>Category::get(['id', 'category_name']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // print_r($request->all());
        $request->validate([
            'category_id'=>'required',
            'blog_title'=>'required',
            'blog_intro'=>'required',
            'blog_photo'=>'required',
        ]);
        $blog = Blog::create($request->except('_token')+[
            'blog_photo'=>'anything photo',
            'blogger_id'=>Auth::id(),
            'created_at'=>now(),
        ]);
        // if (Auth::user()->profile_photo) {
        //     @unlink(public_path('upload/profile_photos/'.Auth::user()->profile_photo));
        // }
        $manager = new ImageManager(new Driver());
        $img_extension = $request->file('blog_photo')->getClientOriginalExtension();
        $new_name = date('YmdHis')."-". Auth::id().".".$img_extension;
        $img = $manager->read($request->file('blog_photo'));
        // ->resize(370,250)
        if ($img_extension == "png") {
            $img->toPng(80)->save(base_path('public/upload/blog_photos/'.$new_name));
        } else {
            $img->toJpeg(80)->save(base_path('public/upload/blog_photos/'.$new_name));
        }
        Blog::find($blog->id)->update([
            'blog_photo'=>$new_name,
        ]);
        return back()->with('BlgAdMsg','Blog Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blog.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }

    function blogBanner(Request $request, $blog_id)
    {
        Blog::find($blog_id)->update([
            'banner_theme'=>$request->banner_theme,
        ]);
        return back();
    }
}
