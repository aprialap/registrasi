<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
   @include('surface.layouts.app_css')
   @stack('custom_css')
   @yield('title')
  </head>
  <body class="main-body">
    @stack('header')
    @include('surface.layouts.message')
    @yield('main-content')
    
    @stack('footer')
    
    @include('surface.layouts.app_js')
    
    @stack('custom_js')
    
  </body>

</html>