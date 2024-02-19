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

            <div class="row">
               <div class="col-md-4">
                  <div class="mb-3">
                     <label for="judul" class="form-label">Judul</label>
                     <input type="text" class="form-control" id="judul">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="mb-3">
                     <label for="penulis" class="form-label">Penulis</label>
                     <input type="text" class="form-control" id="penulis">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="mb-3">
                     <label for="penerbit" class="form-label">Penerbit</label>
                     <input type="text" class="form-control" id="penerbit">
                  </div>
               </div>
               <div class="col">
                  <div class="mb-3">
                     <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                     <input type="date" class="form-control" id="tahun_terbit">
                  </div>
               </div>
               <div class="row mb-3">
                  <div class="col-md-6">
                     <button type="button" class="btn btn-primary">Primary</button>
                     <a href="{{ url('/kategori') }}" class="btn btn-danger" style="margin-left: 10px">Back</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
