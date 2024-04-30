<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function UserList(){
        $users = User::where('id','!=', Auth::id())->get();
        $total_user = User::count();
        return view('admin.UserList', compact('users','total_user'));
    }

    function UserDelete($userId){
        User::find($userId)->delete();
        return back();
    }

    function EditProfile($userId){
        return "<h1>$userId</h1>";
    }
}
