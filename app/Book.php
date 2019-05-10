<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = ['title', 'description', 'isbn'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

}
