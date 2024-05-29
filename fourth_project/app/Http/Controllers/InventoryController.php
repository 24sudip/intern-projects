<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Book, Subject, Inventory};
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    public function guest(){
        return view('layouts.guest');
    }
    
    function InventoryAdd($bookId){
        if (Auth::user()->role == 'librarian') {
            return view('inventory.add',[
                'book'=>Book::find($bookId),
                'users'=>User::where('role','!=','canceled')->get(['id','name']),
                'inventories'=>Inventory::where('book_id',$bookId)->where('user_status','borrowed')->where('due_date','>',now())->get(),
            ]);
        } else {
            return "<h1>Not Available</h1>";
        }
    }

    function InventoryStore(Request $request){
        $request->validate([
            'user_id'=>'required',
        ]);
        $other_books = Inventory::where('user_id',$request->user_id)->where('user_status','borrowed')->get();
        if (!$other_books) {
            Inventory::insert([
                'book_id'=>$request->book_id,
                'user_id'=>$request->user_id,
                'user_status'=>'borrowed',
                'borrow_date'=>now(),
                'due_date'=>today()->addDays(2)->endOfDay(),
                'created_at'=>now(),
            ]);
            return back()->with('boroAdMsg','Book Issued Successfully');
        } else if($other_books->count() == 2) {
            return back()->withErrors('This User Has Borrowed 2 Books Already');
        }

        $exist = Inventory::where('book_id',$request->book_id)->where('user_id',$request->user_id)->first();
        if (!$exist) {
            Inventory::insert([
                'book_id'=>$request->book_id,
                'user_id'=>$request->user_id,
                'user_status'=>'borrowed',
                'borrow_date'=>now(),
                'due_date'=>today()->addDays(2)->endOfDay(),
                'created_at'=>now(),
            ]);
            return back()->with('boroAdMsg','Book Issued Successfully');
        } else if ($exist->user_status == 'returned') {
            $exist->update([
                'user_status'=>'borrowed',
                'borrow_date'=>now(),
                'due_date'=>today()->addDays(2)->endOfDay(),
                'updated_at'=>now(),
                // 'return_date'=>null,
            ]);
            return back()->with('boroAdMsg','Book Issued Successfully');
        } else {
            return back()->withErrors('You Have Already Issued This User');
        }
    }

    function InventoryGive($invenId){
        Inventory::find($invenId)->update([
            'user_status'=>'returned',
            'return_date'=>now(),
        ]);
        return back()->with('retnMsg','Book Returned Successfully');
    }

    function ReaderList($bookId){
        return view('inventory.ReaderList',[
            'inventories'=>Inventory::where('book_id',$bookId)->where('user_status','returned')->get(),
        ]);
    }

    function OverdueList(){
        return view('inventory.OverdueList',[
            'overdues'=>Inventory::where('due_date','<',now())->where('user_status','!=','returned')->get(),
        ]);
    }

    function OverdueChange($invenId){
        Inventory::find($invenId)->update([
            'user_status'=>'returned',
            'return_date'=>now(),
        ]);
        return back();
    }
}
