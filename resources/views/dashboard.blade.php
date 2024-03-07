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
          <div class="col-12 col-lg-3">
            <div class="card">
              <div class="card-body py-4 px-4">
                <div class="d-flex align-items-center">
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
    </div>
  </div>
@endsection
