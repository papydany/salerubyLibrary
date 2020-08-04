<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $b =Book::get();
        $a =Author::get();
return view('books.index')->withB($b)->withA($a);
    }

    public function postBook(Request $request)
{
    $request->validate([
        'title' => 'required',
        'author_id' => 'required',
        'page'=>'required',
    ]);
    $b =new Book;
    $b->title =$request->title;
    $b->author_id =$request->author_id;
    $b->page=$request->page;
    $b->save();
    $request->session()->flash('success', 'successful!');
    return back(); 
}

public function viewBook($id)
{
$b =Book::findOrFail($id);
return view('books.view')->withB($b);
}

public function DeleteBook(Request $request,$id)
{
$b =Book::destroy( $id);
$request->session()->flash('success', 'successful!');
    return back(); 
}
}
