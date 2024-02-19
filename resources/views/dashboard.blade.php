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
            <h3>Dashboard</h3>
         </div>
         <div class="page-content">
            <section class="row">
               <div class="col-12 col-lg-9">
                  <table class="table">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">First</th>
                           <th scope="col">Last</th>
                           <th scope="col">Handle</th>
                           <th scope="col">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">1</th>
                           <td>Mark</td>
                           <td>Otto</td>
                           <td>@mdo</td>
                           <td>
                              <i class="bi bi-pencil-fill"></i>
                              <i class="bi bi-eye-fill"></i>
                              <i class="bi bi-trash-fill"></i>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="col-12 col-lg-3">
                  <div class="card">
                     <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                           {{-- <div class="avatar avatar-xl">
                              <img src="{{ asset('template/assets/compiled/jpg/1.jpg') }}" alt="Face 1">
                           </div> --}}
                           <div class="ms-3 name">
                              <h5 class="font-bold">Hai {{ Auth::user()->name }}</h5>
                              <h5 class="font-bold">{{ Auth::user()->role->name }}</h5>
                           </div>
                        </div>
                     </div>
                     <a class="btn btn-danger" style="text-align: center" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Log Out
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                     </form>
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
