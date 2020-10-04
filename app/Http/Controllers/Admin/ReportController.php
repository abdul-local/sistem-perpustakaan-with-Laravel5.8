<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;

class ReportController extends Controller
{
    public function reportbook(){
        $books=Book::withCount('borrowed')
        ->orderBy('borrowed_count','DESC') 
        ->paginate(10);
        // dd($books);
        return view('admin/report/topbook',[
            'books'=>$books
        ]
    );
    }
}
