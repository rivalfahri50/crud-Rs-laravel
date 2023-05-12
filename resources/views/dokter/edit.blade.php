<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Blog - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: rgb(0, 255, 136)">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
<form action="{{ route('dokter.update', $dokter->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')


        <div class="mb-3">
            <label class="form-label fw-bold">Nama Dokter</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $dokter->nama) }}"
            placeholder="Masukkan nama">
            <!-- error message untuk title -->
            @error('nama')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>


    <div class="mb-3">
        <label class="form-label fw-bold">Foto</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        <!-- error message untuk Gambar -->
        @error('image')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
        @enderror
        @if ($dokter->image)
            <div class="mt-2">
                <img src="{{ asset('storage/dkt/' . $dokter->image) }}" alt="{{ $dokter->image }}" style="max-height: 100px;"/>
            </div>
        @endif
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">Jenis Kelamin</label>
        <div class="mb-3">
            <input type="radio" value="Laki laki" name="jenis_kelamin" {{ old('Laki laki', $dokter->jenis_kelamin) == 'Laki laki' ? 'checked' : '' }}> laki-laki
        <input type="radio" value="perempuan" name="jenis_kelamin" {{ old('perempuan', $dokter->jenis_kelamin) == 'perempuan' ? 'checked' : '' }}> perempuan

            @error('jenis_kelamin')
            <div class="alert alert-danger mt-2">
                {{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">TanggalLahir</label>
        <input type="date" name="tgl_lahir" id="" class="form-control"
            value="{{ date('Y-m-d', strtotime($dokter->tgl_lahir)) }}">
        @error('tgl_lahir')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    <a href="{{ route('dokter.index') }}" class="btn btn-md btn-warning">KEMBALI</a>
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
