<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BukuTampilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(): View
    {
        $books = Book::with('kategories')->paginate(15);
        return view('tampil', compact('books'));
    }
}
