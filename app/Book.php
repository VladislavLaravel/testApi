<?php

namespace App;

use App\Author;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'user_id', 'name', 'page_count', 'annotation', 'image', 'author_id',
    ];

    public $timestamps = false;

    public function author()
    {
        return $this->belongsTo('App\Author');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
