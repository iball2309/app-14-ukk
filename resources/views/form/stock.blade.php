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
               <h3>Form Stock</h3>
            </div>

            <div class="mb-3">
               <label for="exampleFormControlInput1" class="form-label">Stock</label>
               <input name="stock" type="text"
                  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                  class="form-control" id="stock">
            </div>
            <div class="mb-3">
               <label for="exampleFormControlInput1" class="form-label">Buku</label>
               <select class="form-select" aria-label="Default select example">
                  <option selected>- Pilih -</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
               </select>
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
