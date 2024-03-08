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
        <h3>Table Peminjaman</h3>
      </div>
      <div class="row mb-3">
        <div class="col-md-6">
          <a href="{{ route('peminjaman.create') }}" class="btn btn-primary ">Tambah</a>
          <a href="{{ url('/print') }}" class="btn btn-success" target="_blank">Cetak</a>
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
                  <th scope="col">Jumlah Pinjam</th>
                  <th scope="col">Buku</th>
                  <th scope="col">Kategori</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($peminjamans as $item)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>
                      <img src="{{ asset('storage/books/' . optional($item->books)->cover) }}" class="rounded"
                        style="width: 150px" alt="">
                    </td>
                    <td>{{ $item->jp }}</td>
                    <td>{{ optional($item->books)->judul }}</td>
                    <td>
                      <form onsubmit="return confirm('Apakah Anda Yakin?')"
                        action="{{ route('peminjaman.destroy', $item->id) }}" method="POST">
                        <a href="{{ route('peminjaman.show', $item->id) }}" class="btn btn-success">Show</a>
                        <a href="{{ route('peminjaman.edit', $item->id) }}" class="btn btn-warning">Edit</a>
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
