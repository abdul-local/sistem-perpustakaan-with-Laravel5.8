<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowHistory extends Model
{
    protected $table='borrow_history';
    protected $guarded=[];
    // buat method untuk merelasikan dengan User Model
    public function user(){
        return $this->belongsTo(User::class);
    }
    //buat method unruk merelasikan dengan Book model
    public function book(){
        return $this->belongsTo(Book::class);
    }
}
