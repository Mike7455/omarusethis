<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    //

    function __construct(){
        $this->middleware('auth');
    }

    function index(){

        $books = Book::paginate(3);


        return view('book_library', compact('books'));
    }
}
