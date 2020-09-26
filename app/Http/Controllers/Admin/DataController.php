<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Author;

class DataController extends Controller
{
    public function Authors(){
        return datatables()->of(Author::query())->toJson();

    }
}
