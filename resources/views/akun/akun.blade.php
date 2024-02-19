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
               <h3>Table Akun</h3>
            </div>
            <div class="row mb-3">
               <div class="col-md-6">
                  <a href="{{ url('/form-akun') }}" class="btn btn-primary ">Tambah</a>
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
                              <th scope="col">Email</th>
                              <th scope="col">Role</th>
                              <th scope="col">Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td></td>
                              @foreach ($users as $item)
                                 <td>{{ $item->name }}</td>
                                 <td>{{ $item->email }}</td>
                                 <td>{{ $item->role->name }}</td>
                              @endforeach
                              <td>
                                 <a href="{{ url('/form-akun') }}" class="btn btn-primary"><i class="bi bi-eye-fill"></i>
                                    Detail</a>
                                 <a href="{{ url('/delete') }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i>
                                    Hapus</a>
                                 <a href="{{ url('/form-akun') }}" class="btn btn-warning"><i
                                       class="bi bi-pencil-fill"></i>
                                    Edit</a>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>
@endsection
