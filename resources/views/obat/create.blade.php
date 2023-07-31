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
    <title>Perawat</title>
</head>
<body>
<form action="{{ route('obat.store') }}" method="post">
    @csrf
    @csrf


    <div class="form-group">
        <label class="font-weight-bold">Keluhan</label>
        <input type="text" class="form-control @error('keluha') is-invalid @enderror" name="keluhan" value="{{ old('keluhan') }}" placeholder="Masukkan keluhan anda">

        <!-- error message untuk title -->
        @error('keluhan')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="font-weight-bold">Tanggal Berobat</label>
        <input type="date" class="form-control @error('tgl_berobat') is-invalid @enderror" name="tgl_berobat" value="{{ date('d-m-Y') }}" >

        <!-- error message untuk title -->
        @error('tgl_berobat')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="font-weight-bold">Biaya</label>
        <input type="number" class="form-control @error('biaya') is-invalid @enderror" name="biaya" value="{{ old('biaya')}}" value="Rp.">

        <!-- error message untuk title -->
        @error('biaya')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>




    <button type="submit" class="btn btn-md btn-primary">TAMBAH</button>
    <a class="btn btn-md btn-danger"href="{{ route('obat.index') }}">KEMBALI</a>

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
