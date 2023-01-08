<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title','Unkown page')</title>
         
        <!-- styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- main.css -->
        <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
        
        {{-- admin --}}
        <link rel="stylesheet" href="{{asset('assets/dashAdmin_assets/vendors/mdi/css/materialdesignicons.min.css')}}" />
        {{-- <link rel="stylesheet" href="{{asset('assets/dashAdmin_assets/css/style.css')}}" /> --}}
        @stack('styles')
    </head>
    <body>
        {{-- @include('interface.layouts.master-navbar') --}}
        @yield('content')

         @include('interface.layouts.footer')
          <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
         <script src="{{ asset('js/main.js') }}"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
         {{-- admin --}}
        <script src="{{asset('assets/dashAdmin_assets/js/misc.js')}}"></script>
    </body>
</html>