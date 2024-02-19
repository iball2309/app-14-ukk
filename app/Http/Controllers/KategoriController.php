<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(): View {
        $kategories= Kategori::latest()->paginate(5);
        return view('kategories.index', compact ('kategories'));
    }

    public function create() : View
    {
        return view('kategories.create');
    }


   public function store(Request $request) : RedirectResponse {
    $this->validate($request, [
        'name' => 'required'
    ]);

    Kategori::create([
        'name' => $request->name
    ]);
    return redirect()->route('kategori.index')->with(['success', 'data berhasil']);
   }

   public function show(string $id): View {
    $kategori = Kategori::findOrFail($id);

    return view('kategories.show', compact('kategori'));
   }
}