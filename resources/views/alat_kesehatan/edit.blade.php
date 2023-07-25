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
<form action="{{ route('alat_kesehatan.update', $alat_kesehatan->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label fw-bold">Nama Alat</label>
        <input type="text" class="form-control @error('nama_alat') is-invalid @enderror" name="nama_alat" value="{{ old('nama_alat', $alat_kesehatan->nama_alat) }}"
        placeholder="Masukkan nama_alat">
        <!-- error message untuk title -->
        @error('nama_alat')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
        @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Jumlah Alat</label>
            <input type="text" class="form-control @error('jumlah_alat') is-invalid @enderror" name="jumlah_alat" value="{{ old('jumlah_alat', $alat_kesehatan->jumlah_alat) }}"
            placeholder="Masukkan jumlah_alat">
            <!-- error message untuk title -->
            @error('jumlah_alat')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>

    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    <a href="{{ route('alat_kesehatan.index') }}" class="btn btn-md btn-warning">KEMBALI</a>
    </form>
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
