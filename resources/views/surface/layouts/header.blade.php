<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{asset('asset/logopkubima.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">  
        RS PKU MUHAMMADIYAH BIMA</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('pendaftaran')}}">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cek-pendaftaran')}}">Cek Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('status-dokter')}}">Jadwal Dokter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cara-pendaftaran')}}">Cara Pendaftaran</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>