<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;

class AuthorController extends Controller
{
     public function index()
    {
         return Author::all();
    }

    public function show(Author $author)
    {
        return $author->books;
    }
}
