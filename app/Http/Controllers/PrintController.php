<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function index(): View
    {
        $peminjamans = Peminjaman::with('books')->paginate(15);
        $books = Book::all();
        return view('peminjaman.print', compact('peminjamans', 'books'));
    }
}
