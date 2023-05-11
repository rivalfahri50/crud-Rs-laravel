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
<form action="{{ route('pasien.update', $pasien->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label fw-bold">Nama Pasien</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $pasien->nama) }}"
        placeholder="Masukkan nomer">
        <!-- error message untuk title -->
        @error('nama')
        <div class="alert alert-danger mt-2">
        Nama wajib di isi
        </div>
        @enderror
        </div>


    <div class="mb-3">
    <label class="form-label fw-bold">No antrian</label>
    <input type="text" class="form-control @error('no_antrian') is-invalid @enderror" name="no_antrian" value="{{ old('no_antrian', $pasien->no_antrian) }}"
    placeholder="Masukkan nomer">
    <!-- error message untuk title -->
    @error('no_antrian')
    <div class="alert alert-danger mt-2">
    No Harus di isi
    </div>
    @enderror
    </div>



    <div class="mb-3">
        <label class="form-label fw-bold">Keluhan</label>
        <input type="text" class="form-control @error('keluhan') is-invalid @enderror" name="keluhan" value="{{ old('keluhan', $pasien->keluhan) }}"
        placeholder="Masukkan nomer">
        <!-- error message untuk title -->
        @error('keluhan')
        <div class="alert alert-danger mt-2">
        Apa Keluhan Anda
        </div>
        @enderror
        </div>




    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    <button type="reset" class="btn btn-md btn-danger">RESET</button>
    <a href="{{ route('no_antrian.index') }}" class="btn btn-md btn-warning">KEMBALI</a>
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
