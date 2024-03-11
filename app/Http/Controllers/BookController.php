<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    // hak akses
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(): View
    {
        $books = Book::with('kategories')->paginate(15);
        return view('buku.index', compact('books'));
    }

    public function create(): View
    {
        $kategori = Kategori::all();
        return view('buku.create', compact('kategori'));
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'cover' => 'required|max:2048',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'kategori_id' => 'required',
            'stock' => 'integer|required',
        ]);

        $cover = $request->file('cover');

        $cover->storeAs('public/books/', $cover->hashName());

        Book::create([
            'cover' => $cover->hashName(),
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'kategori_id' => $request->kategori_id,
            'stock' => $request->stock,
        ]);

        return redirect()->route('buku.index')->with(['success', 'data berhasil']);
    }

    public function show(string $id): View
    {
        $book = Book::with('kategories')->findOrFail($id);
        return view('buku.show', compact('book'));
    }

    public function edit(string $id): View
    {

        $book = Book::findOrFail($id);
        $kategori = Kategori::all();
        return view('buku.edit', compact('book', 'kategori'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'cover' => 'required|max:2048',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'kategori_id' => 'required',
            'stock' => 'required|integer',
        ]);

        $book = Book::findOrFail($id);

        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $cover->storeAs('public/books/', $cover->hashName());

            Storage::delete('public/books/' . $book->cover);

            $book->update([
                'cover' => $cover->hashName(),
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'tahun_terbit' => $request->tahun_terbit,
                'kategori_id' => $request->kategori_id,
                'stock' => $request->stock,
            ]);
        } else {
            $book->update([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'tahun_terbit' => $request->tahun_terbit,
                'kategori_id' => $request->kategori_id,
                'stock' => $request->stock,
            ]);
        }
        return redirect()->route('buku.index')->with(['success' => 'data berhasil']);
    }

    public function destroy($id): RedirectResponse
    {
        $book = Book::findOrFail($id);

        Storage::delete('public/books/' . $book->cover);

        $book->delete();

        return redirect()->route('buku.index')->with(['success' => 'data berhasil']);
    }
}