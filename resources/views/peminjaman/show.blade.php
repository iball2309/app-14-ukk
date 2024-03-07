@extends('layouts.sidebar')

@section('content')
  <div id="app">
    <div id="main">

      <div class="container">
        <div class="row justify-content-center">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <div class="card-header" style="text-align: center">{{ __('Detail') }}</div>
                <div class="row">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Jumlah Peminjaman</th>
                        <th scope="col">Buku</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{ $peminjaman->jp }}</td>
                        <td>{{ $peminjaman->books->judul }}</td>
                        <td>
                          <form onsubmit="return confirm('Apakah Anda Yakin?')"
                            action="{{ route('peminjaman.destroy', $peminjaman->id) }}" method="POST">
                            <a href="{{ route('peminjaman.edit', $peminjaman->id) }}" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <a href="{{ route('buku.index') }}" class="btn btn-danger">Back</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
