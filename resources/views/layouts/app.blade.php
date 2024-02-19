<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>The Libraries</title>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.bunny.net">
   <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

   <!-- Scripts -->
   @vite(['resources/sass/app.scss', 'resources/js/app.js'])

   <link rel="stylesheet" href="{{ asset('template/assets/compiled/css/app.css') }}">
   <link rel="stylesheet" href="{{ asset('template/assets/compiled/css/app-dark.css') }}">
   <link rel="stylesheet" href="{{ asset('template/assets/compiled/css/iconly.css') }}">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
   <script src="assets/static/js/initTheme.js"></script>
   <div id="app">
      <main class="py-4">
         @yield('content')
      </main>
   </div>
   <script src="{{ asset('template/assets/static/js/components/dark.js') }}"></script>
   <script src="{{ asset('template/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>


   <script src="{{ asset('template/assets/compiled/js/app.js') }}"></script>




   <!-- Need: Apexcharts -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <script src="{{ asset('template/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
   <script src="{{ asset('template/assets/static/js/pages/dashboard.js') }}"></script>
</body>

</html>
