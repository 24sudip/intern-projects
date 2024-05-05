<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function UserList(){
        $users = User::where('id','!=', Auth::id())->get();
        $total_user = User::count();
        if (Auth::user()->role == 'librarian') {
            return view('admin.UserList', compact('users','total_user'));
        } else {
            return "<h1>Not Available</h1>";
        }
    }

    function UserStatus(Request $request,$userId){
        User::find($userId)->update([
            'role'=>$request->role,
        ]);
        return back();
    }

    function EditProfile(){
        return view('admin.EditProfile');
    }

    function ProfileUpdate(Request $request){
        if ($request->password == '') {
            // echo "<h1>Nai</h1>";
            User::find(Auth::id())->update([
                'name'=>$request->name,
                'email'=>$request->email,
            ]);
        } else {
            if (Hash::check($request->old_password, Auth::user()->password)) {
                User::find(Auth::id())->update([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>bcrypt($request->password),
                ]);
                return back()->withSuccess('Profile Updated Successfully');
            } else {
                return back()->with('error',"Old Password Doesn't Match");
            }
        }
    }

    function UpdateProfilePhoto(Request $request){
        if ($request->hasFile('profile_photo')) {
            if (Auth::user()->profile_photo) {
                @unlink(public_path('upload/profile_photos/'.Auth::user()->profile_photo));
            }
            $manager = new ImageManager(new Driver());
            $img_extension = $request->file('profile_photo')->getClientOriginalExtension();
            $new_name = Auth::id().".".$img_extension;
            $img = $manager->read($request->file('profile_photo'));
            // ->resize(370,250)
            if ($img_extension == "png") {
                $img->toPng(80)->save(base_path('public/upload/profile_photos/'.$new_name));
            } else {
                $img->toJpeg(80)->save(base_path('public/upload/profile_photos/'.$new_name));
            }
            User::find(Auth::id())->update([
                'profile_photo'=>$new_name,
            ]);
            return back()->with('PhotoEdtMsg','Profile Photo Updated Successfully');
        } else {
            return back()->with('PhotoErrMsg','Profile Photo Is Required');
        }
    }

    function CategoryPage(){
        if (Auth::user()->role == 'librarian') {
            return view('admin.CategoryPage');
        } else {
            return "<h1>Not Available</h1>";
        }
    }
}
