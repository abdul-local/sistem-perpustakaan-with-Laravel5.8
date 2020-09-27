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
        ->addColumn('action','admin/author/action')
        ->addIndexColumn()
        ->toJson();

    }
}
