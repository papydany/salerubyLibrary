<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $a =Author::get();
return view('authors.index')->withA($a);
    }

    public function postAuthor(Request $request)
{
    $request->validate([
        'lastname' => 'required',
        'firstname' => 'required',
        'email'=>'required|unique:authors',
    ]);
    $a =new Author;
    $a->FirstName =$request->firstname;
    $a->LastName =$request->lastname;
    $a->email=$request->email;
    $a->save();
    $request->session()->flash('success', 'successful!');
    return back(); 
}
    
}
