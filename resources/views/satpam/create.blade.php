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
    <title>Satpam</title>
</head>
<body>
<form action="{{ route('satpam.store') }}" method="post">
    @csrf
    @csrf


    <div class="form-group">
        <label class="font-weight-bold">Nama Satpam</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama satpam">

        <!-- error message untuk title -->
        @error('nama')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="font-weight-bold">Alamat</label>
        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan alamat">

        <!-- error message untuk title -->
        @error('alamat')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="font-weight-bold">No_Hp</label>
        <input type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" placeholder="Masukkan no_hp">

        <!-- error message untuk title -->
        @error('no_hp')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label class="font-weight-bold">Umur</label>
        <input type="text" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ old('umur') }}" placeholder="Masukkan umur">

        <!-- error message untuk title -->
        @error('umur')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
        @enderror
    </div>




  
    <button type="submit" class="btn btn-md btn-primary" >TAMBAH</button>
    <a class="btn btn-md btn-danger" href="{{ route('satpam.index') }}">KEMBALI</a>

</form>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
@include('sweetalert::alert')
</body>
</html>
