<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Blog - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
</head>
<body style="background-color: #00CED1;">
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

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

<form action="{{ route('ruang_operasi.store') }}" method="post">
    @csrf
    @csrf


    <div class="form-group">
        <label class="font-weight-bold">No Ruang</label>
        <input type="number" class="form-control @error('no_ruang') is-invalid @enderror" name="no_ruang" value="{{ old('no_ruang') }}" placeholder="Masukkan no_ruang"
        min="1">

        <!-- error message untuk title -->
        @error('no_ruang')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="font-weight-bold">Status</label>
        <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" placeholder="Masukkan status">

        <!-- error message untuk title -->
        @error('status')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="font-weight-bold">Nama Dokter</label>
        <select name="dokter_id" id="" class="form-control">
        @foreach ($dokters as $nama)
            <option value="{{ $nama->id}}">{{ $nama->nama}}</option>

        @endforeach
    </select>
        @error('dokter_id')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
        <div class="form-group">
            <label class="font-weight-bold">Nama Pasien</label>
            <select name="pasien_id" id="" class="form-control">
            @foreach ($pasiens as $nama)
                <option value="{{ $nama->id}}">{{ $nama->nama}}</option>

            @endforeach
        </select>
            @error('pasien_id')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label class="font-weight-bold">Nama Alat</label>
                <select name="alat_id" id="" class="form-control">
                @foreach ($alat_kesehatans as $nama_alat)
                    <option value="{{ $nama_alat->id}}">{{ $nama_alat->nama_alat}}</option>

                @endforeach
            </select>
                @error('alat_id')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror



<br>
    <button type="submit" class="btn btn-md btn-primary">TAMBAH</button>
    <a class="btn btn-md btn-danger"href="{{ route('ruang_operasi.index') }}">KEMBALI</a>

</form>
</div>
</div>
</div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>

</script>
</body>
</html>
