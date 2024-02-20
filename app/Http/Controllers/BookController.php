<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index(): View {
        $books= Book::latest()->paginate(5);
        return view('buku.index', compact ('books'));
    }

    public function create() : View {
        return view('buku.create');
    }

    public function store(Request $request) : RedirectResponse 
    {
        $this->validate($request, [
            'cover' => 'required|max:2048',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'kategori_id' => 'required',
        ]);

      $cover = $request->file('cover');
      
      $cover->storeAs('public/books/', $cover->hashName());

        Book::create([
        'cover' => $cover->hashName(),
        'judul'=>$request->judul,
        'penulis'=>$request->penulis,
        'penerbit'=>$request->penerbit,
        'tahun_terbit'=>$request->tahun_terbit,
        'kategori_id'=>$request->kategori_id,
        ]);

        return redirect()->route('buku.index')->with(['success', 'data berhasil']);
    }

    public function show(string $id): View 
   {
    $book = Book::findOrFail($id);

    return view('buku.show', compact('book'));
   }

   public function edit(string $id): View {
    
    $book= Book::findOrFail($id);
    return view('buku.edit', compact ('book'));
   }

   public function update(Request $request, $id) : RedirectResponse {
    $this->validate($request, [
        'cover' => 'required|max:2048',
        'judul' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required',
        'kategori_id' => 'required',
    ]);

    $book = Book::finfOrFail($id);

    if ($request->hasFile('cover')) {
        $cover = $request->file('cover');
        $cover->storeAs('public/books/', $cover->hashName());

        Storage::delete('public/books/'.$book->cover);

        $book->update([
            'cover' => $cover->hashName(),
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'kategori_id' => $request->kategori_id
        ]); 
    } else {
        $book->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'kategori_id' => $request->kategori_id
        ]);

        return redirect()->route('buku.index')->with(['succes' => 'data berhasil']);
    }
    
   }

}
