<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Blog - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #00CED1;">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
    <title>Kunjungan</title>
</head>
<body>
<form action="{{ route('kunjungan.store') }}" method="post">
    @csrf
    @csrf


    <div class="form-group">
        <label class="form-label fw-bold">Nama Pengunjung</label>
        <input type="text" class="form-control @error('nama_pengunjung') is-invalid @enderror" name="nama_pengunjung" value="{{ old('nama_pengunjung') }}"
        placeholder="Masukkan nama pengunjung">
        <!-- error message untuk title -->
        @error('nama_pengunjung')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
        @enderror
        </div>


        <div class="form-group">
            <label class="form-label fw-bold">Nama Pasien</label>
            <input type="text" class="form-control @error('nama_pasien') is-invalid @enderror" name="nama_pasien" value="{{ old('nama_pasien') }}"
            placeholder="Masukkan nama pasien">
            <!-- error message untuk title -->
            @error('nama_pasien')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Tanggal </label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ date('d-m-Y') }}"  >

                <!-- error message untuk title -->
                @error('tanggal')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
                <div class="form-group">
                    <label class="form-label fw-bold">No Ruang</label>
                    <input type="number" class="form-control @error('ruang') is-invalid @enderror" name="ruang" value="{{ old('ruang') }}"
                    placeholder="Masukkan ruang">
                    <!-- error message untuk title -->
                    @error('ruang')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>




    <button type="submit" class="btn btn-md btn-primary">TAMBAH</button>
    <a class="btn btn-md btn-danger"href="{{ route('kunjungan.index') }}">KEMBALI</a>

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
