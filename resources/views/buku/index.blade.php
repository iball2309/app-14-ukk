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
               <div class="col-12 col-lg-9">
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
                                 <img src="{{ asset('storage/books/' . $item->cover) }}" class="rounded"
                                    style="width: 150px" alt="">
                              </td>
                              <td>{{ $item->judul }}</td>
                              <td>{{ $item->kategori_id }}</td>
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
               <div class="col-12 col-lg-3">
                  <div class="card">
                     <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                           <div class="avatar avatar-xl">
                              <img src="{{ asset('template/assets/compiled/jpg/1.jpg') }}" alt="Face 1">
                           </div>
                           <div class="ms-3 name">
                              <h5 class="font-bold">Hai {{ Auth::user()->name }}</h5>
                              {{-- <h5 class="font-bold">{{ Auth::user()->role->name }}</h5> --}}
                              <a class="btn btn-danger" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                 Log Out
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>


         <footer>
            <div class="footer clearfix mb-0 text-muted">
               <div class="float-start">
                  <p>2023 &copy; Mazer</p>
               </div>
               <div class="float-end">
                  <p>Crafted with <span class="text-danger"><i class="bi bi-heart-fill icon-mid"></i></span>
                     by <a href="https://saugi.me">Saugi</a></p>
               </div>
            </div>
         </footer>
      </div>
   </div>
@endsection
