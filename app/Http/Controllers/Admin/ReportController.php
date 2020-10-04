<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;
use App\User;

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
    public function topuser(){
        $users=User::withCount('borrowed')
        ->orderBy('borrowed_count','DESC')
        ->paginate(10);
        return view('admin/report/topuser',[
            'users'=>$users
        ]);
    }
}
