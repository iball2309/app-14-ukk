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
                                    <th scope="col">Cover</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td class="center">
                                       <img src="{{ asset('storage/books/' . $book->cover) }}" class="rounded"
                                          style="width: 150px" alt="">
                                    </td>
                                    <td>{{ $book->judul }}</td>
                                    <td>{{ $book->kategori_id }}</td>
                                    <td>
                                       <form onsubmit="return confirm('Apakah Anda Yakin?')"
                                          action="{{ route('buku.destroy', $book->id) }}" method="POST">
                                          <a href="{{ route('buku.edit', $book->id) }}" class="btn btn-warning">Edit</a>
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
