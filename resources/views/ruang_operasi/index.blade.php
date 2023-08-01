
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="icon" type="image/x-icon" href="{{ asset ('assets/favicon.ico')}}" />
<!-- Font Awesome icons (free version)-->
<script src="{{ asset ('https://use.fontawesome.com/releases/v6.3.0/js/all.js')}}" crossorigin="anonymous"></script>
<!-- Google fonts-->
<link href="{{ asset ('https://fonts.googleapis.com/css?family=Montserrat:400,700')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset ('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic')}}" rel="stylesheet" type="text/css"/>
<!-- Core theme CSS (includes Bootstrap)-->
<link href="{{ asset ('css/styles.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{  asset ('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="')}} crossorigin="anonymous" referrerpolicy="no-referrer" />
<br>
<title>operasi</title>
</head>
<body style="background-color: #C0C0C0;">

<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"></a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto justify-content-center">
                <li class="nav-item mx-0 mx-lg-0 "><a class="nav-link py-3 px-0 px-lg-2 rounded" href="dashboard">Beranda</a></li>
                <li class="nav-item mx-0 mx-lg-0 "><a class="nav-link py-3 px-0 px-lg-2 rounded" href="{{ route('dokter.index') }}">Dokter</a>
                <li class="nav-item mx-0 mx-lg-0"><a class="nav-link py-3 px-0 px-lg-2 rounded" href="{{ route('perawat.index') }}">Perawat</a>
                <li class="nav-item mx-0 mx-lg-0"><a class="nav-link py-3 px-0 px-lg-2 rounded" href="{{ route('pasien.index') }}">Pasien</a>
                <li class="nav-item mx-0 mx-lg-0"><a class="nav-link py-3 px-0 px-lg-2 rounded" href="{{ route('no_antrian.index') }}">NoAntrian</a>
                <li class="nav-item mx-0 mx-lg-0"><a class="nav-link py-3 px-0 px-lg-2 rounded" href="{{ route('obat.index') }}">Obat</a>
                <li class="nav-item mx-0 mx-lg-0"><a class="nav-link py-3 px-0 px-lg-2 rounded" href="{{ route('satpam.index') }}">Satpam</a>
                <li class="nav-item mx-0 mx-lg-0"><a class="nav-link py-3 px-0 px-lg-2 rounded" href="{{ route('ruang_operasi.index') }}">R.Operasi</a>
                <li class="nav-item mx-0 mx-lg-0"><a class="nav-link py-3 px-0 px-lg-2 rounded" href="{{ route('pembayaran.index') }}">Pembayaran</a>
                <li class="nav-item mx-0 mx-lg-0"><a class="nav-link py-1 px-0 px-lg-2 rounded" href="{{ route('alat_kesehatan.index') }}">Alat Kesehatan</a>
                <li class="nav-item mx-0 mx-lg-0"><a class="nav-link py-1 px-0 px-lg-2 rounded" href="{{ route('jadwal_dokter.index') }}">Jadwal Dokter</a>
                <li class="nav-item mx-0 mx-lg-0"><a class="nav-link py-3 px-0 px-lg-2 rounded" href="{{ route('kunjungan.index') }}">Kunjungan</a>
                <li class="nav-item mx-0 mx-lg-0"><a href="{{ route('signout') }}" class="nav-link py-3 px-0 px-lg-4 rounded">></a>
            </ul>
        </div>
    </div>
    </nav>
    <br>

    <br>
<div class="container mt-5">
    <br>
    <h2 class="text-center">Data R.Operasi</h2>
    &nbsp; &nbsp;<a href="{{ route('ruang_operasi.create') }}" class="btn btn-warning">Add Data</a>
    <div class="row" style="justify-content:end; float: right;">
        <form action="/ruang_operasi" method="GET">
            <label for="search">Search :</label>
            <input type="search" placeholder="cari" name="search" value="{{ session('search') }}" autocomplete="">
        </form>
    </div>
 <hr>
 <div class>
 <div class="card border-5 shadow rounded">
<table class="table table-striped">
    @php
        $i=1;
    @endphp
    <tr>
        <td scope="col">
            No
        </td>
        <td scope="col">
            No Ruang
        </td>
        <td scope="col">
          Status
        </td>
        <td scope="col">
            Nama Dokter
        </td>
        <td scope="col">
            Nama Pasien
        </td>
        <td scope="col">
            Nama Alat
        </td>
        <td scope="col">
            Aksi
        </td>
    </tr>
    @forelse ($ruang_operasis as $key => $ruang_operasi )
    <tr>
        <td>{{$ruang_operasis->firstItem()+  $key  }}</td>
        <td>
           {{$ruang_operasi->no_ruang}}
        </td>
        <td>
            {{$ruang_operasi->status}}
        </td>
        <td>
            @if ($ruang_operasi->dokter)
            {{$ruang_operasi->dokter->nama}}
        @else

        @endif
        </td>
        <td>
            @if ($ruang_operasi->pasien)
            {{$ruang_operasi->pasien->nama}}
        @else
            Pasien tidak tersedia
        @endif
        </td>
        <td>
            @if ($ruang_operasi->alat)
            {{$ruang_operasi->alat->nama_alat}}
        @else
            Nama alat tidak tersedia
        @endif
        </td>

        <td>


          <form id="delete-form-{{ $ruang_operasi->id }}" action="{{route('ruang_operasi.destroy', $ruang_operasi->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <a href="{{ route('ruang_operasi.edit',$ruang_operasi->id) }}" class="btn btn-primary">Edit</a>
            <button type="submit" class="btn btn-danger" onclick="showAlert(event, {{ $ruang_operasi->id }})">Delete</button>
        </form>
    </center>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function showAlert(event, id) {
            event.preventDefault(); // menghentikan proses submit form

            swal({
                title: "Apakah anda yakin?",
                text: "Data ruang operasi akan dihapus secara permanen!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    document.getElementById("delete-form-"+id).submit(); // submit form jika user mengklik tombol "Ya"
                    swal("Data Berhasil Di hapus")
                } else {
                    swal("Data ruang operasi tidak dihapus.");
                }

            });
        }
    </script>
                    </td>
                </tr>
            @empty
            @endforelse
       </table>
       {{ $ruang_operasis->links() }}
    </div>
</div>
@include('sweetalert::alert')
    </body>
    </html>
