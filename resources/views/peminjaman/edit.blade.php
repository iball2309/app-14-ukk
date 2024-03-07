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
          <h3>Form Peminjaman</h3>
        </div>
        <form action="{{ route('peminjaman.edit', $peminjaman->id) }}" method="post">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label class="font-weight-bold">Jumlah Pinjam</label>
            <input type="text" class="form-control @error('jp') is-invalid @enderror" name="jp"
              value="{{ old('jp', $peminjaman->jp) }}" placeholder="Masukkan Nama Kategori">
            @error('jp')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="font-weight-bold">Buku</label>
            <select class="form-select @error('buku_id') is-invalid @enderror" name="buku_id"
              aria-label="Default select example">
              <option value="">-- Select One --</option>
              @foreach ($book as $item)
                <option value="{{ $item->id }}">{{ $item->judul }}</option>
              @endforeach
            </select>
            @error('buku_id')
              <div class="alert alert-danger mt-2">
                {{ $message }}
              </div>
            @enderror
          </div>
        </form>

        <div class="row mb-3">
          <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('/peminjaman') }}" class="btn btn-danger" style="margin-left: 10px">Back</a>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection
