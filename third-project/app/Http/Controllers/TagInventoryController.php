<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\TagInventory;

class TagInventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function TagInventory($id){
        return view('blog.TagInventory',[
            'blog'=> Blog::find($id),
            'tags'=> Tag::all(),
            'tag_inventories'=>TagInventory::where('blog_id',$id)->get(),
        ]);
    }

    function TagInventoryStore(Request $request, $id){
        $request->validate([
            'tag_id'=>'required',
        ]);
        TagInventory::insert([
            'blog_id'=>$id,
            'tag_id'=>$request->tag_id,
            'created_at'=>now(),
        ]);
        return back()->with('TgAdMsg','Tag Added Successfully');
    }

    function TagInventoryDelete($id){
        TagInventory::find($id)->delete();
        return back();
    }
}
