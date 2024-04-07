<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Blog, Category, TagInventory, Comment, Reply};
use Illuminate\Support\Facades\Auth;

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
        $blog = Blog::findOrFail($id);
        $page_view = $blog->page_view;
        $page_view++;
        Blog::findOrFail($id)->update([
            'page_view'=>$page_view,
        ]);
        return view('frontend.BlogDetails',[
            'blog'=>$blog,
            'tag_invents'=>TagInventory::where('blog_id',$blog->id)->get(),
            'comments'=>Comment::where('blog_id',$blog->id)->get(),
        ]);
    }

    function CommentStore(Request $request ,$id){
        Comment::insert([
            'blog_id'=>$id,
            'comment_text'=>$request->comment_text,
            'commentor_id'=>$request->commentor_id,
            'created_at'=>now(),
        ]);
        return back()->with('Msg','Comment Added Successfully');
    }

    function ReplyAdd($id){
        return view('frontend.ReplyAdd',[
            'comment'=>Comment::find($id),
        ]);
    }

    function ReplyStore(Request $request, $id){
        Reply::insert([
            'comment_id'=>$id,
            'reply_text'=>$request->reply_text,
            'replier_id'=>Auth::id(),
            'created_at'=>now(),
        ]);
        return redirect()->route('blog.details', $request->blog_id);
    }

    function PersonalPage($id){
        return view();
    }
}
