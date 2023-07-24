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
<form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label fw-bold">Nama Pasien</label>
        <input type="text" class="form-control @error('nama_pasien') is-invalid @enderror" name="nama_pasien" value="{{ old('nama_pasien', $pembayaran->nama_pasien) }}"
        placeholder="Masukkan nama_pasien">
        <!-- error message untuk title -->
        @error('nama_pasien')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
        @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Nama Dokter</label>
            <input type="text" class="form-control @error('nama_dokter') is-invalid @enderror" name="nama_dokter" value="{{ old('nama_dokter', $pembayaran->nama_dokter) }}"
            placeholder="Masukkan nama_dokter">
            <!-- error message untuk title -->
            @error('nama_dokter')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Obat</label>
                <input type="text" class="form-control @error('obat') is-invalid @enderror" name="obat" value="{{ old('obat', $pembayaran->obat) }}"
                placeholder="Masukkan obat">
                <!-- error message untuk title -->
                @error('obat')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Jumlah Obat</label>
                    <input type="number" class="form-control @error('jumlah_obat') is-invalid @enderror" name="jumlah_obat" value="{{ old('jumlah_obat', $pembayaran->jumlah_obat) }}"
                    placeholder="Masukkan jumlah_obat">
                    <!-- error message untuk title -->
                    @error('jumlah_obat')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>

            <div class="mb-3">
                <label class="form-label fw-bold">No Ruang</label>
                <input type="number" class="form-control @error('ruang') is-invalid @enderror" name="ruang" value="{{ old('ruang', $pembayaran->ruang) }}"
                placeholder="Masukkan ruang">
                <!-- error message untuk title -->
                @error('ruang')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                </div>

    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    <a href="{{ route('pembayaran.index') }}" class="btn btn-md btn-warning">KEMBALI</a>
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
