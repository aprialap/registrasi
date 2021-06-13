
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
                    <H3>Infomrasi Praktek Dokter</H3>
                    <table class="table table-striped table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th width="2%">No</th>
                                <th width="28%">Poli Tujuan </th>
                                <th width="29%">Dokter</th>
                                <th width="28%">Jadwal Praktek </th>
                                <th width="13%">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse ($data as $item)
                            <tr>
                               <td>{{$loop->iteration}}</td> 
                               <td>{{$item->poli->nama}}</td>
                               <td>{{$item->dokter->nama}}</td>
                               <td>{{$item->keterangan}}</td>
                               <td>
                                   @if($item->status == 1) Praktek @else Libur @endif
                               </td>  
                               
                         @empty
                         <tr>
                           <td colspan="5" class="text-center"><i>Belum ada data.</i></td>  
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


