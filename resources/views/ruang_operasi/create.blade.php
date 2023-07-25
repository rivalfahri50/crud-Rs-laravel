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
    <title>Ruang Operasi</title>
</head>
<body>
<form action="{{ route('ruang_operasi.store') }}" method="post">
    @csrf
    @csrf


    <div class="form-group">
        <label class="font-weight-bold">No Ruang</label>
        <input type="number" class="form-control @error('no_ruang') is-invalid @enderror" name="no_ruang" value="{{ old('no_ruang') }}" placeholder="Masukkan no_ruang">

        <!-- error message untuk title -->
        @error('no_ruang')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="font-weight-bold">Status</label>
        <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" placeholder="Masukkan status">

        <!-- error message untuk title -->
        @error('status')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>





    <button type="submit" class="btn btn-md btn-primary">TAMBAH</button>
    <a class="btn btn-md btn-danger"href="{{ route('ruang_operasi.index') }}">KEMBALI</a>

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
