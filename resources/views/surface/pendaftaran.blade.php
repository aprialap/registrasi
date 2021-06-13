
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
                    <form action="" method="GET">
                        <label for="basic-url" class="form-label">Masukkan NRM:</label>
                      <div class="input-group mb-3">
                        <input type="text" name="q" value="{{$q}}" class="form-control form-control-sm" placeholder="NRM" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                      </div>
                    </form>
                    <H3>Pasien</H3>

                    <form action="{{route('store.pendaftaran')}}" method="POST">
                    @csrf
                   
                    @if ($pasien->count() != 0)

                        <input type="text" name="rm" value="{{$pasien->no_rm}}" hidden>
                        <label for="basic-url" class="form-label">Nama Pasien:</label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-sm" value="{{$pasien->nama}}" placeholder="Nama pasien" readonly>
                        </div>
                        <label for="basic-url" class="form-label">Alamat:</label>
                        <div class="input-group mb-3">
                            <textarea name="" class="form-control form-control-sm"  placeholder="alamat" id="" cols="30" rows="3" readonly>{{$pasien->alamat}}</textarea>
                        </div>
                        <label for="basic-url" class="form-label">Telp./HP:</label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Telp./HP" value="{{$pasien->telp}}" readonly>
                        </div>
                        <label for="basic-url" class="form-label">Ibu Kandung:</label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Ibu Kandung" value="{{$pasien->ibu_kandung}}" readonly>
                        </div>
                    @endif
                   
                    <label for="basic-url" class="form-label">Poli Tujuan:</label>
                    <div class="input-group mb-3">
                        <select name="poli_tujuan" class="form-control form-control-sm">
                            <option value="" disabled selected Readonly >**Pilih Poli Tujuan**</option>
                           @foreach ($poli as $item)
                               <option value="{{$item->id}}">{{$item->nama}}</option>
                           @endforeach
                        </select>
                    </div>
                    <label for="basic-url" class="form-label">Untuk Tanggal:</label>
                    <div class="input-group mb-3">
                      
                      <input type="date" name="untuk_tanggal" data-date="" data-date-format="YYYY-MM-DD"  value="{{date('Y-m-d')}}" class="date form-control form-control-sm" placeholder="Nama pasien">
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Daftar</button>
                </form>
                </div>
              </div>
             

        </div>
        <div class="col-sm-4">&nbsp;</div>
    </div>
    <div class="row " style="text-align: center">
        <div class="col">
            <p>Belum memiliki NRM?? <a href="{{route('daftar-baru')}}">Daftar Disini</a></p>
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


