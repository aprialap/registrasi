
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
        <div class="col-sm-4">&nbsp;</div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
        
                    <H3>Pasien Baru</H3>
                    <form action="{{route('surface.store.pasien')}}" method="POST">
                    @csrf
                        <label for="basic-url" class="form-label">NIK:</label>
                    <div class="input-group mb-3">
                      <input type="text" name="nik" class="form-control form-control-sm" placeholder="NIK Pasien / wali pasien" required>
                    </div>
                    <label for="basic-url" class="form-label">Nama Pasien:</label>
                    <div class="input-group mb-3">
                      <input type="text" name="nama" class="form-control form-control-sm" placeholder="Nama pasien" required >
                    </div>
                    <label for="basic-url" class="form-label">Alamat:</label>
                    <div class="input-group mb-3">
                        <textarea name="alamat" class="form-control form-control-sm"  placeholder="alamat" id="" cols="30" rows="3" required></textarea>
                    </div>
                    <label for="basic-url" class="form-label">Telp./HP:</label>
                    <div class="input-group mb-3">
                      <input type="text" name="telp" class="form-control form-control-sm" placeholder="Telp./HP" required>
                    </div>
                    <label for="basic-url" class="form-label">Ibu Kandung:</label>
                    <div class="input-group mb-3">
                      <input type="text" name="ibu_kandung" class="form-control form-control-sm" placeholder="Ibu kandung" required>
                    </div>
                    <button type="sumbit" class="btn btn-primary btn-sm">Daftar</button>
                    <a href="{{route('pendaftaran')}}" class="btn btn-success btn-sm">Kembali</a>
                </form>
                </div>
              </div>
        </div>
        <div class="col-sm-4">&nbsp;</div>
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


