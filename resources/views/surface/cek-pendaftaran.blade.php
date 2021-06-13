
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
            <div class="card">
                <div class="card-body">
                    <H3>Infomrasi Pendaftaran</H3>
                    <div class="mb-3">
                      <form action="" method="GET">
                        <table>
                            <tr>
                                <td style="width:100px">No. Rm</td>
                             
                                <td style="width: 250px"><input type="text" name="q"  value="{{$q}}" class="form-control form-control-sm" placeholder="Masukan No NRM Anda"></td>
                                <td style="width: 100px;text-align:right" ><button class="btn btn-sm btn-secondary">Cari</button></td>
                            </tr>      
                        </table>
                    </form>
                    </div>
                    
                
                    <table class="table table-striped table-responsive table-bordered">
                        <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Alamat</th>
                              <th scope="col">Status</th>
                              <th scope="col">No.Antrian</th>
                              <th scope="col">Poli</th>
                              <th scope="col">Dokter</th>
                              <th scope="col">Tanggal</th>
                            </tr>
                          </thead>
                          <tbody>
                        @forelse ($data as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->pasien->nama}}</td>
                            <td>{{$item->pasien->alamat}}</td>
                            <td>
                                @if($item->status == 1)UMUM @elseif($item->status == 2) BPJS @else <i>Belum ada status</i> @endif
                            <td>{{$item->no_antrian}}</td>
                            <td>{{$item->poli->nama}}</td>
                            <td>@if($item->dokter_id != null ){{$item->dokter->nama}} @else <i>Belum ada dokter</i>@endif </td>
                            <td>{{$item->tanggal_pendaftaran}}</td>
                          </tr>
                          @empty
                          <tr>
                              <td colspan="8" class="text-center"><i>Belum ada data.</i></td>
                          </tr>
                          @endforelse
                           
                          </tbody>
                      </table>
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


