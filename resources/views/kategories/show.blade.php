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

                                    <th scope="col">Nama</th>
                                    <th scope="col">Dibuat</th>

                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>

                                    <td>{{ $kategori->name }}</td>
                                    <td>{{ $kategori->created_at }}</td>

                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
