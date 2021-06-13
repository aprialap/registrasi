@extends('layouts.admin')
@section('title')
    <title>Admin | Jadwal Praktek</title>    
@endsection
@section('content')

      <!-- DataTales-->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Jadwal Praktek</h6>
              <div class="col-md-12 text-right">
                <a  href="{{route('jadwal-praktek.create')}}" class="btn btn-sm btn-success" title="Tambah Data"><i class="nav-icon fas fa-plus"></i> Tambah Data</a>
              </div>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="myTable" width="100%" cellspacing="0"> 
                    <thead>
                          <tr>
                            <th width="2%">No</th>
                            <th width="28%">Poli Tujuan </th>
                            <th width="29%">Dokter</th>
                            <th width="28%">Jadwal Praktek </th>
                            <th width="13%">Status</th>
                            <th></th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                            <th width="2%">No</th>
                            <th width="28%">Poli Tujuan </th>
                            <th width="29%">Dokter</th>
                            <th width="28%">Jadwal Praktek </th>
                            <th width="13%">Status</th>
                            <th></th>
                          </tr>
                      </tfoot>
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
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('jadwal-praktek.edit', $item->id)}}" class="btn btn-primary btn-sm"><i class="nav-icon fas fa-edit"></i></a>
                                        <a href="{{route('jadwal-praktek.destroy', $item->id)}}" class="btn btn-danger btn-sm tombol-hapus"><i class="nav-icon fas fa-trash"></i></a>
                                      </div>
                                </td>  
                            </tr> 
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
});
</script>
@endpush

