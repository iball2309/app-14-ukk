@extends('layouts.sidebar')

@section('content')
  <div id="app">
    <div id="main">

      <div class="container">
        <div class="row justify-content-center">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <img src="{{ asset('storage/books/' . $book->cover) }}" class="rounded" style="width: 500px;"
                    alt="">
                </div>
                <div class="col-md-6 mt-3">
                  <h4>Judul : {{ $book->judul }}</h4>
                  <h4>Penulis : {{ $book->penulis }}</h4>
                  <h4>Penerbit : {{ $book->penerbit }}</h4>
                  <h4>Terbit Pada : {{ $book->tahun_terbit }}</h4>
                  <h4>Stock : {{ $book->stock }}</h4>
                  <h4>Kategori : {{ $book->kategories->name }}</h4>
                  <form onsubmit="return confirm('Apakah Anda Yakin?')" action="{{ route('buku.destroy', $book->id) }}"
                    method="POST">
                    <a href="{{ route('buku.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('buku.index') }}" class="btn btn-primary">Back</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
