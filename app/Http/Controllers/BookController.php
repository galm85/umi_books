<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books.index',['books'=>$books]);
    }

    public function create(){
        return view('books.create');
    }

    public function store(){
        $book = new Book();

        $book->book_name = request('book_name');
        $book->books_number = request('books_number');
        $book->pages_number = request('pages_number');
        $book->copies_number = ceil(request('books_number')/4);
        $book->total_pages_to_print = ceil((request('books_number')/4)*(request('pages_number')/2));
        $book->books_printed = 0;
        $book->covers_number = ceil(request('books_number')/2);
        $book->covers_printed = 0;
        $book->spine = request('spine');

        $book->save();

        return redirect('/');

    }


    public function show($id){
        $book = Book::findOrFail($id);
        return view('books.show',['book'=>$book]);
    }

    public function update($id){
        $book = Book::findOrFail($id);
        $book->book_name = request('book_name');
        $book->books_number = request('books_number');
        $book->pages_number = request('pages_number');
        $book->copies_number = ceil(request('books_number')/4);
        $book->total_pages_to_print = ceil((request('books_number')/4)*(request('pages_number')/2));
        $book->books_printed = request('books_printed');
        $book->covers_number = ceil(request('books_number')/2);
        $book->covers_printed = 0;
        $book->spine = request('spine');

        $book->save();

        return redirect('/');

    }

    public function destroy($id){
       $book = Book::findOrFail($id);
       $book ->delete();
        return redirect('/');

    }



}
