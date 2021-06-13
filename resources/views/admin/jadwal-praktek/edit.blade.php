@extends('layouts.admin')
@section('title')
    <title>Admin | Edit Jadwal Praktek</title>    
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Jadwal Praktek</h6>
    </div>
    <div class="card-body">
    <form action="{{route('jadwal-praktek.update', $data->id)}}" method="post">
    @csrf
        <div class="row">
            <div class="col-4"> 
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Poli</label>
                    <select name="poli" class="form-control form-control-sm input-table select2" required>
                        <option value="">**Pilih Poli**</option>
                        @foreach ($poli as $pol)
                            <option value="{{$pol->id}}" @if($data->poli_id == $pol->id) SELECTED @endif>{{$pol->nama}}</option>
                        @endforeach
                     </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4"> 
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Dokter</label>
                    <select name="dokter" class="form-control form-control-sm input-table select2" required>
                        <option value="">**Pilih Dokter**</option>
                        @foreach ($dokter as $dktr)
                            <option value="{{$dktr->id}}" @if($data->dokter_id == $dktr->id) SELECTED @endif>{{$dktr->nama}}</option>
                        @endforeach
                     </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4"> 
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Status</label>
                    <select name="status" class="form-control form-control-sm input-table select2" required>
                        <option value="">**Pilih Status**</option>
                        <option value="1" @if($data->status == 1) SELECTED @endif>Praktek</option>
                        <option value="2"@if($data->status == 2) SELECTED @endif>Libur</option>
                     </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8"> 
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                        <textarea name="keterangan" class="form-control form-control-sm" id="" cols="30" rows="5"></textarea>
                </div>
            </div>
        </div>
    
        <button type="sumbit" class="btn btn-primary btn-sm">Simpan</button>
        <a href="{{route('jadwal-praktek')}}" class="btn btn-success btn-sm">Kembali</a>
    </form>
    </div>
</div>

  
@endsection
@push('custom_css')
<link href="{{asset('asset/admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@push('custom_js')
    <!-- Page level plugins -->
    <script src="{{asset('asset/admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('asset/admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );


$('.select2').select2({
      
        theme: "bootstrap4",
        width: 'resolve'
    });

</script>


@endpush

