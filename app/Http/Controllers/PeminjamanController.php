<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Kategori;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PeminjamanController extends Controller
{
    // hak akses
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(): View
    {
        $peminjamans = Peminjaman::with('books')->paginate(15);
        $books = Book::all();
        return view('peminjaman.index', compact('peminjamans', 'books'));
    }

    public function create(): View
    {
        $book = Book::all();
        return view('peminjaman.create', compact('book'));
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'jp' => 'required',
            'buku_id' => 'required'
        ]);

        Peminjaman::create([
            'jp' => $request->jp,
            'buku_id' => $request->buku_id,
        ]);
        $buku =  Book::findOrFail($request->buku_id);
        $buku->stock -= $request->jp;
        $buku->save();
        return redirect()->route('peminjaman.index')->with(['success', 'data berhasil']);
    }

    public function show(string $id): View
    {
        $peminjaman = Peminjaman::with('books')->findOrFail($id);
        $user = User::all();
        return view('peminjaman.show', compact('peminjaman', 'user'));
    }

    public function edit(string $id): View
    {

        $peminjaman = Peminjaman::findOrFail($id);
        $book = Book::all();
        return view('peminjaman.edit', compact('peminjaman', 'book'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'jp' => 'required',
            'buku_id' => 'required',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);

        if ($request->hasFile('cover')) {

            $peminjaman->update([
                'jp' => $request->jp,
                'buku_id' => $request->buku_id
            ]);
        } else {
            $peminjaman->update([
                'jp' => $request->jp,
                'buku_id' => $request->buku_id
            ]);
        }
        return redirect()->route('peminjaman.index')->with(['succes' => 'data berhasil']);
    }

    public function destroy($id): RedirectResponse
    {
        $peminjaman = Peminjaman::findOrFail($id);



        $peminjaman->delete();

        return redirect()->route('peminjaman.index')->with(['success' => 'data berhasil']);
    }
}