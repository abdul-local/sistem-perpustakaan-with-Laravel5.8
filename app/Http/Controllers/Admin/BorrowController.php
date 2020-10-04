<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BorrowController extends Controller
{
    // buat method index
    public function index(){
        return view('admin/borrow/index');

    }
}
