<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Book, Subject, Inventory};
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    function InventoryAdd($bookId){
        if (Auth::user()->role == 'librarian') {
            return view('inventory.add',[
                'book'=>Book::find($bookId),
                'users'=>User::where('role','!=','canceled')->get(['id','name']),
                'inventories'=>Inventory::where('book_id',$bookId)->where('user_status','borrowed')->get(),
            ]);
        } else {
            return "<h1>Not Available</h1>";
        }
    }

    function InventoryStore(Request $request){
        $request->validate([
            'user_id'=>'required',
        ]);
        Inventory::insert([
            'book_id'=>$request->book_id,
            'user_id'=>$request->user_id,
            'user_status'=>'borrowed',
            'borrow_date'=>now(),
            'due_date'=>today()->addDays(2)->endOfDay(),
            'created_at'=>now(),
        ]);
        return back()->with('boroAdMsg','Book Issued Successfully');
    }
}
