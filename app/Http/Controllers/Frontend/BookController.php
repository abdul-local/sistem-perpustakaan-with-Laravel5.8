<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\BorrowHistory;

class BookController extends Controller
{
    // buat method dengan nama index
    public function index(){
        $books=Book::paginate(10);
        return view('frontend/Book/index',[
            'books'=>$books,
        ]);
    }
    // buat method show
    public function show(Book $book){
        return view('frontend/Book/show',[
            'title'=>'Detail Buku',
            'book'=>$book,
        ]);
    }
    // buat method borrow
    public function borrow(Book $book){
        // dd($book);
        BorrowHistory::create([
            'user_id'=>auth()->id(),
            'book_id'=>$book->id,

        ]);
        return 'success nambah data';
    }
}
