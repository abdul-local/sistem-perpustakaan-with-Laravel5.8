<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\User;
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
            'title'=>$book->title,
            'book'=>$book,
        ]);
    }
    // buat method borrow
    public function borrow(Book $book){
        
        $user=auth()->user();
        if($user->borrowed()->IsStillBorrow($book->id)){
            return redirect()->back()->with('toast','Ada sudah meminjam buku ini');
        }
        $user->borrowed()->attach($book);
        $book->decrement('qty');

        return redirect()->back()->with('toast','Berhasil meminjam buku');
    }
}
