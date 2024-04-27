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
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog.index',[
            'blogs'=>Blog::where('blogger_id', Auth::id())->latest()->get(),
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
            'blog_title'=>'required|unique:blogs',
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
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blog.edit', compact('blog'), [
            'categories'=>Category::get(['id', 'category_name']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Blog::find($id)->update([
            'category_id'=>$request->category_id,
            'blog_title'=>$request->blog_title,
            'blog_intro'=>$request->blog_intro,
            'blog_detail'=>$request->blog_detail,
            'blog_icon'=>$request->blog_icon,
        ]);
        if ($request->hasFile('blog_photo')) {
            @unlink(public_path('upload/blog_photos/'.Blog::find($id)->blog_photo));
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
            Blog::find($id)->update([
                'blog_photo'=>$new_name,
            ]);
        }
        return back()->with('BlgEdtMsg','Blog Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        @unlink(public_path('upload/blog_photos/'.Blog::find($id)->blog_photo));
        Blog::find($id)->delete();
        return back();
    }

    function blogBanner(Request $request, $blog_id)
    {
        Blog::find($blog_id)->update([
            'banner_theme'=>$request->banner_theme,
        ]);
        return back();
    }

    function blogFeature(Request $request, $blog_id)
    {
        Blog::where('feature_status',1)->update([
            'feature_status'=>0,
        ]);
        Blog::find($blog_id)->update([
            'feature_status'=>$request->feature_status,
        ]);
        return back();
    }
}
