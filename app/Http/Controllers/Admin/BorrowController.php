<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BorrowHistory;
use Carbon\Carbon;
class BorrowController extends Controller
{
    // buat method index
    public function index(){
        return view('admin/borrow/index');

    }
    // buat method return book
    public function returnbook( Request $request,BorrowHistory $borrowHistory){
        $borrowHistory->update([
            'returned_at'=>Carbon::now(),
            'admin_id'=>auth()->id(),
        ]);
        return redirect()->route('admin/borrow')->with('success','Buku berhasil dikembalikan');

    }
}
