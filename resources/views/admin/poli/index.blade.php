@extends('layouts.admin')
@section('title')
    <title>Admin | Poli</title>    
@endsection
@section('content')


      <!-- DataTales-->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Poli</h6>
              <div class="col-md-12 text-right">
                <a  href="{{route('poli.create')}}" class="btn btn-sm btn-success" title="Tambah Data"><i class="nav-icon fas fa-plus"></i> Tambah Data</a>
              </div>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                            <th scope="col" width="30px">No</th>
                            <th scope="col">Nama</th>
                            <th></th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th></th>
                          </tr>
                      </tfoot>
                      <tbody>
                        @forelse ($data as $item)
                         <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->nama}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{route('poli.edit', $item->id)}}" class="btn btn-primary btn-sm"><i class="nav-icon fas fa-edit"></i></a>
                                    <a href="{{route('poli.destroy', $item->id)}}" class="btn btn-danger btn-sm tombol-hapus"><i class="nav-icon fas fa-trash"></i></a>
                                </div>
                            </td>  
                          </tr>
                          @empty
                          <tr>
                            <td colspan="3" class="text-center"><i>Belum ada data.</i></td>  
                          </tr>
                        @endforelse
                      </tbody>
                  </table>
              </div>
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
</script>


@endpush

