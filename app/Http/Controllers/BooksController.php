<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Books::all();
        return view('books.create', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'genre'=>'required',
        ], [
            'required' => 'Yêu cầu tất cả không được bỏ trống.',
        ]);

        Books::create($request->all());
        return redirect()->route('BooksIndex');
    }

    /**
     * Display the specified resource.
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Books::findOrFail($id);
        return view('books.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'genre'=>'required',
        ], [
            'required' => 'Yêu cầu tất cả không được bỏ trống.',
        ]);

        $books = Books::findOrFail($id);
        $books->update($request->all());
        return redirect()->route('BooksIndex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $books=Books::findOrFail($id);
        $books->delete();
        return redirect()->route('BooksIndex');
    }
}
