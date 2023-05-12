<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Blog - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: rgb(0, 255, 128)">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
    <title>Perawat</title>
</head>
<body>
<form action="{{ route('perawat.store') }}" method="post">
    @csrf
    @csrf


    <div class="form-group">
        <label class="font-weight-bold">Nama Perawat</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Perawat">

        <!-- error message untuk title -->
        @error('nama')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="font-weight-bold">Jenis Kelamin</label><br>
        <input type="radio"  @error('jenis_kelamin') is-invalid @enderror name="jenis_kelamin"  value="Laki laki">laki laki
        <input type="radio"  @error('jenis_kelamin') is-invalid @enderror name="jenis_kelamin"  value="perempuan">perempuan

        <!-- error message untuk title -->
        @error('jenis_kelamin')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="font-weight-bold">Tanggal Lahir</label>
        <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ date('d-m-Y') }}" placeholder="Masukan Tanggal Lahir Anda" >

        <!-- error message untuk title -->
        @error('tgl_lahir')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>




    <button type="submit" class="btn btn-md btn-primary">TAMBAH</button>
    <a class="btn btn-md btn-danger"href="{{ route('perawat.index') }}">KEMBALI</a>

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
