<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::all();
        return view('book.book', compact('book'));
    }

    public function create() {}

    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required|min:3',
            'pengarang' => 'required|min:3',
            'tahun_terbit' => 'required'
        ]);
        Book::create($validate);
        return redirect()->route('book.index')->with('success', 'buku berhasil ditambahkan');
    }

    public function show(string $id) {}

    public function edit(string $id)
    {
        $book = Book::all();
        $bookDetail = Book::findOrFail($id);
        return view('book.book', compact('book', 'bookDetail'));
    }

    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'judul' => 'required|min:3',
            'pengarang' => 'required|min:3',
            'tahun_terbit' => 'required'
        ]);
        Book::where('id', $id)->update($validate);
        return redirect()->route('book.index')->with('success', 'buku berhasil diperbaharui');
    }

    public function destroy(string $id)
    {
        $bookDetail = Book::findOrFail($id);
        $bookDetail->delete();
        return redirect()->route('book.index')->with('success', 'buku berhasil dihapus');
    }
}
