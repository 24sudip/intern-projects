<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Book, Subject};
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function CreateBook(){
        if (Auth::user()->role == 'librarian') {
            return view('book.create',[
                'subjects'=>Subject::get(['id','subject_name']),
            ]);
        } else {
            return "<h1>Not Available</h1>";
        }
    }

    function StoreBook(Request $request){
        $request->validate([
            'format'=>'required',
            'subject_id'=>'required',
            'title'=>'required',
            'author'=>'required',
            'publication_date'=>'required',
            'price'=>'required',
            'rack_number'=>'required',
            'number_of_copy'=>'required',
            'book_photo'=>'required',
        ]);
        $book = Book::create($request->except('_token')+[
            'book_photo'=>'anything photo',
            'created_at'=>now(),
        ]);

        $manager = new ImageManager(new Driver());
        $img_extension = $request->file('book_photo')->getClientOriginalExtension();
        $new_name = date('YmdHis').$book->id.".".$img_extension;
        $img = $manager->read($request->file('book_photo'));
        // ->resize(370,250)
        if ($img_extension == "png") {
            $img->toPng(80)->save(base_path('public/upload/book_photos/'.$new_name));
        } else {
            $img->toJpeg(80)->save(base_path('public/upload/book_photos/'.$new_name));
        }
        Book::find($book->id)->update([
            'book_photo'=>$new_name,
        ]);
        return back()->with('PhotoAdMsg','Book Added Successfully');
    }

    function ViewBook(){
        if (Auth::user()->role == 'librarian') {
            return view('book.index',[
                'books'=>Book::all(),
            ]);
        } else {
            return "<h1>Not Available</h1>";
        }
    }

    function EditBook($id){
        if (Auth::user()->role == 'librarian') {
            return view('book.edit',[
                'book'=>Book::find($id),
                'subjects'=>Subject::get(['id','subject_name']),
            ]);
        } else {
            return "<h1>Not Available</h1>";
        }
    }

    function UpdateBook(Request $request, $id){
        Book::withTrashed()->find($id)->update([
            'format'=>$request->format,
            'subject_id'=>$request->subject_id,
            'title'=>$request->title,
            'author'=>$request->author,
            'publication_date'=>$request->publication_date,
            'price'=>$request->price,
            'rack_number'=>$request->rack_number,
            'number_of_copy'=>$request->number_of_copy,
            'updated_at'=>now(),
        ]);

        if ($request->hasFile('book_photo')) {
            @unlink(public_path('upload/book_photos/'.Book::find($id)->book_photo));
            $manager = new ImageManager(new Driver());
            $img_extension = $request->file('book_photo')->getClientOriginalExtension();
            $new_name = date('YmdHis').$id.".".$img_extension;
            $img = $manager->read($request->file('book_photo'));
            // ->resize(370,250)
            if ($img_extension == "png") {
                $img->toPng(80)->save(base_path('public/upload/book_photos/'.$new_name));
            } else {
                $img->toJpeg(80)->save(base_path('public/upload/book_photos/'.$new_name));
            }
            Book::find($id)->update([
                'book_photo'=>$new_name,
            ]);
        }

        return back()->with('bookEdtMsg','Book Updated Successfully');
    }

    function ShowBook($id){
        return view('book.show',[
            'book'=>Book::withTrashed()->find($id),
        ]);
    }

    function SoftDeleteBook($id){
        // return response()->json(['message' => 'Post soft deleted']);
        Book::find($id)->delete();
        return back();
    }

    function showSoftDeletedBook(){
        if (Auth::user()->role == 'librarian') {
            return view('book.softDeleted',[
                'books'=>Book::onlyTrashed()->get(),
                'subjects'=>Subject::get(['id','subject_name']),
            ]);
        } else {
            return "<h1>Not Available</h1>";
        }
    }

    function RestoreBook($id){
        $book = Book::withTrashed()->find($id);
        $book->restore();
        return back();
    }

    function ForceDeleteBook($id){
        $book = Book::withTrashed()->find($id);
        @unlink(public_path('upload/book_photos/'.$book->book_photo));
        $book->forceDelete();
        return back()->withSuccess('Book Deleted Successfully');
    }

    function SearchBook(){
        return view('search.book',[
                'subjects'=>Subject::get(['id','subject_name']),
        ]);
    }

    function SearchResult(Request $request){
        $request->validate([
            'search_text'=>'required',
            'search_area'=>'required',
        ]);
        return view('search.result',[
            'books'=>Book::where($request->search_area ,'like',"%{$request->search_text}%")->get(),
        ]);
    }
}
