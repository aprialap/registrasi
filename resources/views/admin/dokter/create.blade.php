@extends('layouts.admin')
@section('title')
    <title>Admin | Tambah Dokter</title>    
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Dokter</h6>
    </div>
    <div class="card-body">
    <form action="{{route('dokter.store')}}" method="post">
    @csrf

        <div class="row">
            <div class="col-4"> 
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                       <input type="text" name="nama" class="form-control form-control-sm" required>
                </div>
            </div>
        </div>
    
        <button type="sumbit" class="btn btn-primary btn-sm">Simpan</button>
        <a href="{{route('dokter')}}" class="btn btn-success btn-sm">Kembali</a>
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

