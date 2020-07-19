<?php

namespace App;
use App\Book;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name', 'second_name',
    ];

    public $timestamps = false;

    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
