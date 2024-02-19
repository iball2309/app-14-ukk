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
            <div class="mb-3">
               <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
               <input name="kategori" type="text" class="form-control" id="Kategori">
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
@endsection
