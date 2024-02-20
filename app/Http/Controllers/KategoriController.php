<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // insert
    public function index(): View {
        $kategories= Kategori::latest()->paginate(5);
        return view('kategories.index', compact ('kategories'));
    }

    // create
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
// detail
   public function show(string $id): View 
   {
    $kategori = Kategori::findOrFail($id);

    return view('kategories.show', compact('kategori'));
   }
// edit
   public function edit(string $id): View {
    
    $kategori= Kategori::findOrFail($id);
    return view('kategories.edit', compact ('kategori'));
}

   public function update(Request $request, $id) : RedirectResponse {
    $this->validate($request,[
        'name' => 'required'
    ]);

    $kategori = Kategori::findOrFail($id);

    if ($request) {
        $kategori->update([
            'name' => $request->name
        ]); 
    } else {
        $kategori->update([
            'name' => $request->name
        ]);
        return redirect()->route('kategories.index')->with(['success', 'data berhasil']);
    }
   }
// delete
   public function destroy($id) : RedirectResponse {
    $kategori = Kategori::findOrFail($id);
    $kategori->delete();

    return redirect()->route('kategori.index')->with(['success', 'data berhasil']);
   }
}