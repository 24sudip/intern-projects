<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Blog, Comment, Reply, User};
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role != 'blocked') {
            $blogs = Blog::where('blogger_id', Auth::id())->get(['id','blog_title','created_at']);
            return view('home',[
                'blogs'=>$blogs,
                'users'=>User::paginate(4),
                'all_blogs'=>Blog::latest()->get(),
            ]);
        } else {
            Auth::logout();
            return redirect('/login')->with('msg','Your Account Has been Blocked. Please Contact Admin');
        }
    }

    public function CommentDetails($id){
        $comment = Comment::find($id);
        if ($comment->reading_status == 0) {
            $reading_status = $comment->reading_status;
            $reading_status++;
            Comment::find($id)->update([
                'reading_status'=>$reading_status,
            ]);
        }
        return view('admin.user.CommentDetails',[
            'comment'=>$comment,
            'replies'=>Reply::where('comment_id',$id)->get(),
        ]);
    }

    public function AllSearch(Request $request){
        $result = Carbon::createFromFormat('Y-m-d', $request->all_search);
        // print_r($result);
        // print_r($result->copy()->subDays(1)->endOfDay());
        // print_r($result->copy()->addDays(1)->startOfDay());
        $blogs = Blog::where('created_at','>',$result->copy()->subDays(1)->endOfDay())
        ->where('created_at','<',$result->copy()->addDays(1)->startOfDay())->get();
        return view('admin.user.AllSearch', compact('blogs'));
    }
}
