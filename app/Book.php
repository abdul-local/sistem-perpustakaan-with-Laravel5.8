<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded=[];
    public function author(){
        return $this->belongsTo(Author::class);
    }
    // buat method untuk menampilkan image
    public function getCover(){
        if(substr($this->cover,0,5) =="https"){
            return $this->cover;
        }
        if($this->cover){
            return asset($this->cover);
        }
        return 'https://via.placeholder.com/150x200.png';
    }
    // buat method borrow
    public function borrowed(){

       return $this->belongsToMany(User::class,'borrow_history');
    }
}
