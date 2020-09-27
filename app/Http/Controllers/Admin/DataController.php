<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Author;

class DataController extends Controller
{
    public function Authors(){
        $author=Author::orderBy('name','ASC');
        return datatables()->of($author)
        ->addColumn('action',function(Author $author){
            return '<a href="'.route('admin/author/edit',$author).'" class="btn btn-warning">Edit</a>';
        })
        ->addIndexColumn()
        ->toJson();

    }
}
