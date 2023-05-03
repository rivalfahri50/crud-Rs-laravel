<form action="{{ route('dokter.updadte', $dokter->id) }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @method('update')


    <div class="mb-3">
    <label class="form-label fw-bold">Nama dokter</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $dokter->nama) }}"
    placeholder="Masukkan Nama dokter">
    <!-- error message untuk title -->
    @error('nama')
    <div class="alert alert-danger mt-2">
    {{ $message }}
    </div>
    @enderror
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">Foto</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
        <!-- error message untuk Gambar -->
        @error('image')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
        @enderror
        @if ($dokter->image)
            <div class="mt-2">
                <img src="{{ asset('storage/dkt/' . $dokter->image) }}" alt="{{ $dokter->image }}" style="max-height: 100px;"/>
            </div>
        @endif
    </div>

    <div class="mb-3">
    <label class="form-label fw-bold">Jenis Kelamin</label>
    <input type="radio" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ old('jenis_kelamin', $dokter->jenis_kelamin) }}">Laki laki
    <input type="radio" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ old('jenis_kelamin', $dokter->jenis_kelamin) }}">perempuan
    <!-- error message untuk stok -->
    @error('jenis_kelamin')
    <div class="alert alert-danger mt-2">
    {{ $message }}
    </div>
    @enderror
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">Tanggal Lahir</label>
        <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ old('tgl_lahir', $dokter->tgl_lahir) }}">
        <!-- error message untuk stok -->
        @error('tgl_lahir')
        <div class="alert alert-danger mt-2">
        {{ $message }}
        </div>
        @enderror
        </div>
    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
    <button type="reset" class="btn btn-md btn-danger">RESET</button>
    <a href="{{ route('dokter.index') }}" class="btn btn-md btn-warning">KEMBALI</a>
    </form>
    </div>
    </div>
    </div>
    </div>
    @endsection
