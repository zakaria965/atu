<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function index()
    {
        $Books = Book ::all();
        return view ('Books.book_list' , ['Books' =>$Books ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validate input
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'author' => 'required|string|max:255',
    ]);

    Book::create($validated);

    return redirect()->route('Books')->with('success', 'Book added successfully!');
    }

    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
     return view('Books.edit', compact('book'));
    }

    public function update(Request $request, string $id)
    {
         // 1. Validate input
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'author' => 'required|string|max:255',
    ]);

    // 2. Find book and update
    $book = Book::findOrFail($id);
    $book->update($validated);

    // 3. Redirect back with success message
    return redirect()->route('Books')->with('success', 'Book updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $book = Book::findOrFail($id);
         $book->delete();

      return redirect()->route('Books')->with('success', 'Book deleted successfully!');
    }
}
