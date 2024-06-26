<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Blog, Category, TagInventory, Comment, Reply, User, GroupInventory, Tag, Subscriber, SecondReply, MediaLink};
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    function Index(){
        $tag = Tag::where('tag_name','#Trending')->first();
        $category = Category::where('category_name','Inspiration')->first();
        return view('frontend.BloggerHome',[
            'featured_blog'=>Blog::where('feature_status','1')->first(),
            'popular_blogs'=>Blog::orderBy('page_view','DESC')->limit(4)->get(),
            'recent_blogs'=>Blog::latest()->limit(4)->get(),
            'first_editor'=>GroupInventory::where('group_name','Editors-Pick')->latest()->first(),
            'all_editors'=>GroupInventory::where('group_name','Editors-Pick')->latest()->limit(5)->get(),
            'trending_tags'=>TagInventory::where('tag_id', $tag->id)->latest()->limit(6)->get(),
            'inspi_blogs'=>Blog::where('category_id', $category->id)->latest()->limit(3)->get(),
        ]);
    }

    function Contact(){
        return view('frontend.Contact');
    }

    function About(){
        return view('frontend.About');
    }

    function CategoryPage($id){
        return view('frontend.CategoryPage',[
            'blogs'=>Blog::where('category_id',$id)->latest()->paginate(2),
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
        if ($blog->banner_theme == 0) {
            return view('frontend.BlogDetails',[
                'blog'=>$blog,
                'tag_invents'=>TagInventory::where('blog_id',$blog->id)->get(),
                'comments'=>Comment::where('blog_id',$blog->id)->get(),
            ]);
        } else {
            return view('frontend.BlogAlt',[
                'blog'=>$blog,
                'tag_invents'=>TagInventory::where('blog_id',$blog->id)->get(),
                'comments'=>Comment::where('blog_id',$blog->id)->get(),
            ]);
        }
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

    function SecondReplyAdd($id){
        return view('frontend.SecondReplyAdd',[
            'reply'=>Reply::find($id),
        ]);
    }

    function SecondReplyStore(Request $request, $id){
        SecondReply::insert([
            'reply_id'=>$id,
            'second_reply_text'=>$request->second_reply_text,
            'second_replier_id'=>Auth::id(),
            'created_at'=>now(),
        ]);
        return redirect()->route('blog.details', $request->blog_id);
    }

    function PersonalPage($id){
        return view('frontend.PersonalPage',[
            'user'=> User::find($id),
            'blogs'=>Blog::where('blogger_id',$id)->latest()->paginate(2),
        ]);
    }

    function AdminPage(){
        $user= User::where('role','admin')->first();
        return view('frontend.AdminPage',[
            'user'=> $user,
            'blogs'=>Blog::where('blogger_id',$user->id)->latest()->paginate(2),
            'group_blogs'=>GroupInventory::where('group_name','Personal-Slider')->latest()->limit(6)->get(),
        ]);
    }

    function MinimalPage(){
        return view('frontend.MinimalPage',[
            'minimal_blogs'=>GroupInventory::where('group_name','Minimal')->latest()->paginate(2),
        ]);
    }

    function ClassicPage(){
        return view('frontend.ClassicPage',[
            'classic_blogs'=>GroupInventory::where('group_name','Classic')->latest()->paginate(2),
            'classic_sliders'=>GroupInventory::where('group_name','Classic-Slider')->limit(2)->get(),
        ]);
    }

    function AllBlog(){
        return view('frontend.AllBlog',[
            'blogs'=>Blog::latest()->paginate(6),
        ]);
    }

    function TagPage($id){
        return view('frontend.TagPage',[
            'tagged'=> TagInventory::where('tag_id', $id)->get(),
            'tag_name'=>Tag::find($id)->tag_name,
        ]);
    }

    function SearchResult(Request $request){
        // print_r($request->all());
        return view('frontend.SearchResult',[
            'blogs'=>Blog::where('blog_title','like',"%{$request->search_text}%")->get(),
        ]);
    }

    function Subscribe(Request $request){
        $request->validate([
            'subscriber_email'=>'required|unique:subscribers',
        ]);
        Subscriber::insert([
            'user_id'=>Auth::id(),
            'subscriber_email'=>$request->subscriber_email,
            'created_at'=>now(),
        ]);
        return back()->with('SubAdMsg','You Have Subscribed Successfully') ;
    }
}
