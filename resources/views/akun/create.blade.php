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
          <h3>Form Akun</h3>
        </div>
        <form action="{{ route('akun.store') }}" enctype="multipart/form-data" method="post">
          <div class="container">
            <div class="row">
              {{-- judul --}}
              <div class="col-md-4">
                <div class="form-group">
                  <label class="font-weight-bold">Nama</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" placeholder="Masukkan Nama">


                  @error('name')
                    <div class="alert alert-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-md-4">
                {{-- penulis --}}
                <div class="form-group">
                  <label class="font-weight-bold">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" placeholder="Masukkan Nama Kategori">
                  @error('email')
                    <div class="alert alert-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                {{-- penerbit --}}
                <div class="form-group">
                  <label class="font-weight-bold">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    value="{{ old('password') }}" placeholder="Masukkan Password">


                  @error('password')
                    <div class="alert alert-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              {{-- tahun_terbit --}}
              <div class="col-md-4">
                <div class="form-group">
                  <label class="font-weight-bold">Kategori</label>
                  <select class="form-select @error('role_id') is-invalid @enderror" name="role_id"
                    aria-label="Default select example">
                    <option value="">-- Select One --</option>
                    @foreach ($role as $item)
                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                  </select>


                  @error('role_id')
                    <div class="alert alert-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            @csrf
            <div class="row mb-3">
              <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url('/buku') }}" class="btn btn-danger" style="margin-left: 10px">Back</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
