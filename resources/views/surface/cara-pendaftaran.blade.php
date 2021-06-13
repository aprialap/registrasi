
@extends('surface.layouts.app')

@section('title')
    <title>Pendaftaran</title>    
@endsection
@section('header-title')
    <div class="header-title">Beranda</div> 
@endsection
@section('main-content')
<div class="container justify" style="padding-top: 30px">
    <div class="row mb-5">
        <div class="col-sm-12">
            <div class="card mb-3">
                <div class="card-body">
                    <H3>Cara Pendaftaran Pasien BPJS</H3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam labore veritatis, temporibus omnis fugiat ab unde nisi modi sit corporis voluptates voluptate eaque iure, autem quam error porro ipsum maxime.</p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <H3>Cara Pendaftaran Pasien UMUM</H3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam labore veritatis, temporibus omnis fugiat ab unde nisi modi sit corporis voluptates voluptate eaque iure, autem quam error porro ipsum maxime.</p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <H3>CARA PENDAFTARAN PASIEN RAWAT JALAN (KLINIK DOKTER) BPJS</H3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam labore veritatis, temporibus omnis fugiat ab unde nisi modi sit corporis voluptates voluptate eaque iure, autem quam error porro ipsum maxime.</p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <H3>CARA PENDAFTARAN PASIEN RAWAT JALAN (KLINIK DOKTER) UMUM</H3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam labore veritatis, temporibus omnis fugiat ab unde nisi modi sit corporis voluptates voluptate eaque iure, autem quam error porro ipsum maxime.</p>
                </div>
            </div>
        </div>
   
    </div>
</div>
@endsection
@push('header')
    @include('surface.layouts.header')
@endpush
@push('footer')
    @include('surface.layouts.footer')
@endpush

@push('custom_css')

@endpush
@push('custom_js')

@endpush


