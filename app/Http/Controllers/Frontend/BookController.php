<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
class BookController extends Controller
{
    // buat method dengan nama index
    public function index(){
        $books=Book::get();
        return view('frontend/Book/index',[
            'books'=>$books,
        ]);
    }
}
