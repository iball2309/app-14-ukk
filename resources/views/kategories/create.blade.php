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
               <h3>Form Kategori</h3>
            </div>
            <form action="{{ route('kategori.store') }}" method="post">
               @csrf
               <div class="form-group">
                  <label class="font-weight-bold">Nama</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                     value="{{ old('name') }}" placeholder="Masukkan Nama Kategori">


                  @error('name')
                     <div class="alert alert-danger mt-2">
                        {{ $message }}
                     </div>
                  @enderror
               </div>

               <div class="row mb-3">
                  <div class="col-md-6">
                     <button type="submit" class="btn btn-primary">Simpan</button>
                     <a href="{{ url('/kategori') }}" class="btn btn-danger" style="margin-left: 10px">Back</a>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection
