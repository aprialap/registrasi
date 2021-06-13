@extends('layouts.admin')
@section('title')
    <title>Admin | Pasien Reservasi</title>    
@endsection
@section('content')


      <!-- DataTales-->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Pasien Reservasi</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">No.RM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Status</th>
                            <th scope="col">No.Antrian</th>
                            <th scope="col">Poli</th>
                            <th scope="col">Dokter</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col"></th>
                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">No.RM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Status</th>
                            <th scope="col">No.Antrian</th>
                            <th scope="col">Poli</th>
                            <th scope="col">Dokter</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col"></th>
                          </tr>
                      </tfoot>
                      <tbody>
                        @forelse ($data as $item)
                         <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->pasien->no_rm}}</td>
                            <td>{{$item->pasien->nama}}</td>
                            <td>{{$item->pasien->alamat}}</td>
                            <td>
                                <select name="" id="status{{$loop->iteration}}" class="form-control form-control-sm input-table select2">
                                   <option value="">**Pilih Satatus**</option>
                                    <option value="1"  @if($item->status == 1) SELECTED @endif>Umum</option>
                                    <option value="2"  @if($item->status == 2) SELECTED @endif>BPJS</option>
                                </select>
                            </td>
                            <td>{{$item->no_antrian}}</td>
                            <td>{{$item->poli->nama}}</td>
                            <td>
                                <select name="" id="dokter{{$loop->iteration}}" class="form-control form-control-sm input-table select2">
                                    <option value="">**Pilih Dokter**</option>
                                    @foreach ($dokter as $dktr)
                                        <option value="{{$dktr->id}}"  @if($item->dokter_id == $dktr->id ) SELECTED @endif>{{$dktr->nama}}</option>
                                    @endforeach
                                 </select>
                            </td>
                            <td>{{$item->tanggal_pendaftaran}}</td>
                            <td><button type="button" class="btn btn-sm btn-primary btn-post"  data-id={{$item->id}} data-status="status{{$loop->iteration}}" data-dokter="dokter{{$loop->iteration}}">Post</button></td>
                          </tr>
                        @empty
                        <tr>
                            <td colspan="12" class="text-center"><i>Belum ada data.</i></td>
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

$(document).ready(function() {
    

    $('.select2').select2({
       
        theme: "bootstrap4"        
    });

    $('.btn-post').click(function() {
        var getStatus = $(this).attr('data-status');
        var getDokter = $(this).attr('data-dokter');
        var id = $(this).attr('data-id');
        // console.log(getStatus);
        var status = $('#'+getStatus).val();
        var dokter = $('#'+getDokter).val();
        // console.log(status)
        
        
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Anda akan menyimpan perubahan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Saya yakin!',
            cancelButtonText: 'Batal'
            }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    url: '{{route('getReservasi')}}',
                    type: 'GET',
                    data: {
                        'id'    : id,
                        'status': status,
                        'dokter': dokter,
                    },
                    contentType: 'application/json',
                    success: function (data) {
                        console.log(data);
                    },
            
                });

                Swal.fire(
                'Berhasil!',
                'Anda Berhasil post data.',
                'success'
                )
            }
            })

    });
});
</script>


@endpush

