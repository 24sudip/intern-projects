<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Blog, GroupInventory};

class GroupInventoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function GroupShow(){
        return view('admin.group.GroupShow',[
            'blogs'=>Blog::latest()->get(),
        ]);
    }

    function GroupInventory($id){
        return view('admin.group.GroupInventory',[
            'blog'=> Blog::find($id),
            'group_inventories'=>GroupInventory::where('blog_id',$id)->get(),
        ]);
    }

    function GroupInventoryStore(Request $request, $id){
        $request->validate([
            'group_name'=>'required',
        ]);
        GroupInventory::insert([
            'blog_id'=>$id,
            'group_name'=>$request->group_name,
            'created_at'=>now(),
        ]);
        return back()->with('GrpAdMsg','Group Added Successfully');
    }

    function GroupInventoryDelete($id){
        GroupInventory::find($id)->delete();
        return back();
    }
}
