<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Book;
use Auth;

use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::with('author', 'user')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest  $request)
    {   
        $category->image = 

        $book = array(
            'user_id'    => Auth::user()->id,
            'name'       => $request->name,
            'page_count' => $request->page_count,
            'annotation' => $request->annotation,
            'image'      => $request->image,
            'author_id'  => $base64_decode($request['image'])->store('upload', 'public');
        );

        $book = Book::create($book);

        return $book;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Book $book, BookRequest $request)
    {   
        $book = array(
            'user_id'    => Auth::user()->id,
            'name'       => $request->name,
            'page_count' => $request->page_count,
            'annotation' => $request->annotation,
            'image'      => $request->image,
            'author_id'  => $base64_decode($request['image'])->store('upload', 'public');
        );

        $book->update($book);

        return response()->json($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
    }
}
