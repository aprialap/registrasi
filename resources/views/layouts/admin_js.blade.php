  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('asset/admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('asset/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('asset/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('asset/admin/js/sb-admin-2.min.js')}}"></script>

 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script src="{{asset('asset/sweetalert/sweetalert2.all.min.js')}}"></script>

 <script>
   
   $('.tombol-hapus').on('click', function(e){

      e.preventDefault();
      const   href = $(this).attr('href');

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
          if (result.value) {
            document.location.href = href;
          }
        })
   });
 </script>