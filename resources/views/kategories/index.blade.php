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
            <h3>Table Kategori</h3>
         </div>
         <div class="row mb-3">
            <div class="col-md-6">
               <a href="{{ route('kategori.create') }}" class="btn btn-primary ">Tambah</a>
            </div>
         </div>
         <div class="page-content">
            <section class="row">
               <div class="col-12 col-lg-9">
                  <table class="table">
                     <thead>
                        <tr>

                           <th scope="col">#</th>
                           <th scope="col">Nama</th>
                           <th scope="col">Action</th>
                        </tr>
                     </thead>
                     <?php
                     
                     ?>
                     <tbody>
                        @php
                           $no = 1;
                        @endphp
                        @foreach ($kategories as $item)
                           <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $item->name }}</td>
                              <td>
                                 <form onsubmit="return confirm('Apakah Anda Yakin?')"
                                    action="{{ route('kategori.destroy', $item->id) }}" method="POST">
                                    <a href="{{ route('kategori.show', $item->id) }}" class="btn btn-success">Show</a>
                                    <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-warning">Edit</a>
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
