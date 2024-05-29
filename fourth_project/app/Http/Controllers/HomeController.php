<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use Illuminate\Support\Facades\Auth;

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
        return view('home',[
            'borrowed_books'=>Inventory::where('user_id',Auth::id())->where('user_status','borrowed')->where('due_date','>',now())->count(),
            'not_returned_books'=>Inventory::where('user_id',Auth::id())->where('user_status','borrowed')->where('due_date','<',now())->count(),
            'returned_books'=>Inventory::where('user_id',Auth::id())->where('user_status','returned')->count(),
            'total_books'=>Inventory::where('user_id',Auth::id())->get(),
        ]);
    }
}
