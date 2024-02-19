<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $categories = Kategori::latest()->paginate(5);
        return view('buku.kategori', compact ('categories'));
    }
}
