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
    <form action="{{ route('ruang_operasi.update',$ruang_operasi->id) }}" method="POST" enctype="multipart/form-data">
       @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label fw-bold">No Ruang</label>
        <input type="number" class="form-control @error('no_ruang') is-invalid @enderror" name="no_ruang" value="{{ old('no_ruang', $ruang_operasi->no_ruang) }}"
        placeholder="Masukkan no ruang">
        <!-- error message untuk title -->
        @error('no_ruang')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Status</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status', $ruang_operasi->status) }}"
            placeholder="Masukkan status">
            <!-- error message untuk title -->
            @error('status')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Nama Dokter</label>
                <select name="dokter_id" id="" class="form-control">
                @foreach ($dokters as $nama)
                    <option value="{{ $nama->id}}" {{ ($nama->id == $ruang_operasi->dokter_id) ? "selected" : "" }}>{{ $nama->nama}}</option>

                @endforeach
            </select>
                @error('dokter_id')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label class="font-weight-bold">Nama Pasien</label>
                    <select name="pasien_id" id="" class="form-control">
                    @foreach ($pasiens as $nama)
                        <option value="{{ $nama->id}}" {{ ($nama->id == $ruang_operasi->pasien_id) ? "selected" : "" }}>{{ $nama->nama}}</option>

                    @endforeach
                </select>
                    @error('pasien_id')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="form-group">
                        <label class="font-weight-bold">Nama Alat</label>
                        <select name="alat_id" id="" class="form-control">
                        @foreach ($alat_kesehatans as $nama_alat)
                            <option value="{{ $nama_alat->id}}" {{ ($nama_alat->id == $ruang_operasi->nama_alat) ? "selected" : "" }}>{{ $nama_alat->nama_alat}}</option>

                        @endforeach
                    </select>
                        @error('alat_id')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror


           <br>
    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    <a href="{{ route('ruang_operasi.index') }}" class="btn btn-md btn-warning">KEMBALI</a>
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
