@extends('layouts.admin')

@section('content')
   <h1 class="h3 mb-4 text-gray-800">Selamat Datang {{Auth::user()->name}}</h1>
@endsection
