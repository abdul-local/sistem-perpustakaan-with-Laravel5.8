<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Author;
use App\Book;

class DataController extends Controller
{
    public function Authors(){
        $author=Author::orderBy('name','ASC');
        return datatables()->of($author)
        ->addColumn('action','admin/author/action')
        ->addIndexColumn()
        ->toJson();

    }
    public function Books(){
        $book=Book::orderBy('title','ASC');
        return datatables()->of($book)
        ->addColumn('author',function(Book $model){
            return $model->author->name;
        })
       ->editColumn('cover',function(Book $model){
            return '<img src="'.$model->getCover() .'" height="150px">';
        })
         ->addColumn('action','admin/book/action')
         ->addIndexColumn()
         ->rawColumns(['cover','action'])
        ->toJson();

    }
}
