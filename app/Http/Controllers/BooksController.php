<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\StoreBooksRequest;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ophalen van alle boeken
        $books = Book::all();

        // een view returnen en de variabele $books meesturen naar de view
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBooksRequest $request)
    {
        // aanmaken van een nieuw boek (met behulp van de Model)
        $book = new Book();
        // attributen
        $book->title = $request->title;
        $book->description = $request->description;
        $book->isbn = $request->isbn;
        // boek bewaren in de database (insert uitvoeren)
        $book->save();

        return redirect()->route('books.index')->with('message', 'Boek aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        // attributen
        $book->title = $request->title;
        $book->description = $request->description;
        $book->isbn = $request->isbn;
        //product bewaren in de database (update uitvoeren)
        $book->save();

        return redirect()->route('books.index')->with('message', 'Book geupdate');
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param \App\Book\ $book
     * @return \Illuminate\Http\Response
     */
    public function delete(Book $book)
    {
        return view('books.delete', compact('book'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();
        return redirect()->route('books.index')->with('message', 'Boek verwijderd');
    }
}
