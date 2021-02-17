<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStorerequest;
use App\Models\Book;
use Illuminate\Foundation\Exceptions\RegisterErrorViewPaths;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksContrller extends Controller
{
    public function index(){
       $books = DB::table('_books')->get();
       return view('index')->with('books',$books);
    }
    public function show($id = null){
       $books= DB::table('_books')->find($id);  
    return view('show',compact('books'))->with('books',$books);
    }
    public function create(){
       return view('create');
    }

    public function store(BookStorerequest $request){

      $book = new Book;
       $book->name = $request->name;
       $book->pages = $request->pages;
       $book->isbn = $request->Isbn;
       $book->price =  $request->price;
       $book->published_at = $request->published_at;
       $book->save(); 

      return redirect('/books',302);
    }
}
