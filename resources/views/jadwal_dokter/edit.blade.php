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
<form action="{{ route('jadwal_dokter.update', $jadwal_dokter->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label fw-bold">Nama Dokter</label>
        <input type="text" class="form-control @error('nama_dokter') is-invalid @enderror" name="nama_dokter" value="{{ old('nama_dokter', $jadwal_dokter->nama_dokter) }}"
        placeholder="Masukkan nama_dokter">
        <!-- error message untuk title -->
        @error('nama_dokter')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
        @enderror
        </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Tanggal</label>
                <input type="date" name="tanggal" class="form-control"
                    value="{{ date('Y-m-d', strtotime($jadwal_dokter->tanggal)) }}">
                @error('tanggal')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label class="form-label fw-bold">No Ruang</label>
                <input type="number" class="form-control @error('ruang') is-invalid @enderror" name="ruang" value="{{ old('ruang', $jadwal_dokter->ruang) }}"
                placeholder="Masukkan ruang">
                <!-- error message untuk title -->
                @error('ruang')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Pasien</label>
                    <input type="text" class="form-control @error('nama_pasien') is-invalid @enderror" name="nama_pasien" value="{{ old('nama_pasien', $jadwal_dokter->nama_pasien) }}"
                    placeholder="Masukkan nama_dokter">
                    <!-- error message untuk title -->
                    @error('nama_pasien')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>

    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    <a href="{{ route('perawat.index') }}" class="btn btn-md btn-warning">KEMBALI</a>
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
