<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Blog - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: rgb(0, 255, 149)">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
    <title>Perawat</title>
</head>
<body>
<form action="{{ route('no_antrian.store') }}" method="post">
    @csrf
    @csrf


    <div class="form-group">
        <label class="font-weight-bold">No Antrian</label>
        <input type="number" class="form-control @error('no_antrian') is-invalid @enderror" name="no_antrian" value="{{ old('no_antrian') }}" placeholder="Masukkan no antrian">

        <!-- error message untuk title -->
        @error('no_antrian')
            <div class="alert alert-danger mt-2">
                No antrian wajib di isi
        @enderror
    </div>
    <div class="form-group">
        <label class="font-weight-bold">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama">

        <!-- error message untuk title -->
        @error('nama')
            <div class="alert alert-danger mt-2">
               Nama harus Di isi
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="font-weight-bold">Tanggal Berobat</label>
        <input type="date" class="form-control @error('tgl_berobat') is-invalid @enderror" name="tgl_berobat" value="{{ date('d-m-Y') }}" >

        <!-- error message untuk title -->
        @error('tgl_berobat')
            <div class="alert alert-danger mt-2">
                Tanggal Harus Diisi
            </div>
        @enderror
    </div>




    <button type="submit" class="btn btn-md btn-primary">TAMBAH</button>
    <button type="reset" class="btn btn-md btn-warning">RESET</button>
    <a class="btn btn-md btn-danger"href="{{ route('no_antrian.index') }}">KEMBALI</a>

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
