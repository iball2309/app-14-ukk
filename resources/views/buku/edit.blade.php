@extends('layouts.sidebar')

@section('content')
  <div id="app">

    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>
      <div class="container">
        <div class="page-heading">
          <h3>Form Buku</h3>
        </div>
        <form action="{{ route('buku.update', $book->id) }}" enctype="multipart/form-data" method="post">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label class="font-weight-bold">Cover</label>
            <input type="file" class="form-control" name="cover">
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
              value="{{ old('judul', $book->judul) }}" placeholder="Masukkan Nama Kategori">
            @error('judul')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="font-weight-bold">penulis</label>
            <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis"
              value="{{ old('penulis', $book->penulis) }}" placeholder="Masukkan Nama Penulis">
            @error('penulis')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Penerbit</label>
            <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit"
              value="{{ old('penerbit', $book->penerbit) }}" placeholder="Masukkan Nama Kategori">
            @error('penerbit')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Stock</label>
            <input type="text" class="form-control @error('stock') is-invalid @enderror" name="stock"
              value="{{ old('stock', $book->stock) }}" placeholder="Masukkan Nama Kategori">
            @error('stock')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Tahun Terbit</label>
            <input type="date" class="form-control @error('tahun_terbit') is-invalid @enderror" name="tahun_terbit"
              value="{{ old('tahun_terbit', $book->tahun_terbit) }}" placeholder="Masukkan Nama Kategori">
            @error('tahun_terbit')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Kategori</label>
            <select class="form-select @error('kategori_id') is-invalid @enderror" name="kategori_id"
              aria-label="Default select example">
              @foreach ($kategori as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>
            @error('kategori_id')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="{{ url('/buku') }}" class="btn btn-danger" style="margin-left: 10px">Back</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
