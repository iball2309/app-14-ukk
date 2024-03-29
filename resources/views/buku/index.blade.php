@extends('layouts.sidebar')

@section('content')
  <div id="app">

    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>

      <div class="page-heading">
        <h3>Table Buku</h3>
      </div>
      <div class="row mb-3">
        <div class="col-md-6">
          <a href="{{ route('buku.create') }}" class="btn btn-primary ">Tambah</a>
        </div>
      </div>
      <div class="page-content">
        <section class="row">
          <div class="col-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Cover</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($books as $item)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td class="center">
                      <img src="{{ asset('storage/books/' . $item->cover) }}" class="rounded" style="width: 150px"
                        alt="">
                    </td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->kategories->name }}</td>
                    <td>
                      <form onsubmit="return confirm('Apakah Anda Yakin?')"
                        action="{{ route('buku.destroy', $item->id) }}" method="POST">
                        <a href="{{ route('buku.show', $item->id) }}" class="btn btn-success">Show</a>
                        <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </section>
      </div>
    </div>
  </div>
@endsection
