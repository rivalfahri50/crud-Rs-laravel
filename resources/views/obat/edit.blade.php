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
<form action="{{ route('obat.update', $obat->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')


    <div class="mb-3">
    <label class="form-label fw-bold">Keluhan</label>
    <input type="text" class="form-control @error('keluhan') is-invalid @enderror" name="keluhan" value="{{ old('keluhan', $obat->keluhan) }}"
    placeholder="Masukkan nomer">
    <!-- error message untuk title -->
    @error('keluhan')
    <div class="alert alert-danger mt-2">
        {{ $message }}
    </div>
    @enderror
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">Tanggal Berobat</label>
        <input type="date" name="tgl_berobat" id="" class="form-control"
            value="{{ date('Y-m-d', strtotime($obat->tgl_berobat)) }}">
        @error('tgl_berobat')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Biaya</label>
                <input type="text" class="form-control @error('biaya') is-invalid @enderror" name="biaya" value="{{ old('biaya', $obat->biaya) }}"
                placeholder="Masukkan nomer">
                <!-- error message untuk title -->
                @error('biaya')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                </div>





    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    <a href="{{ route('obat.index') }}" class="btn btn-md btn-warning">KEMBALI</a>
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

