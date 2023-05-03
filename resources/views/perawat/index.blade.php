<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <title>Perawat</title>
</head>
<body>
    <br>
    <center><h2>Perawat</h2></center>
    <br>
    &nbsp; &nbsp;<a href="{{ route('perawat.create') }}" class="btn btn-primary">Add Data</a>
    <hr>

<table class="table table-striped">
    <tr>
        <td scope="col">
            Nama Perawat
        </td>
        <td scope="col">
          Jenis Kelamin
        </td>
        <td scope="col">
            Tanggal lahir
        </td>
        <td scope="col">
            Aksi
        </td>
    </tr>
    @forelse ($perawats as $perawat )
    <tr>
        <td>
           {{$perawat->nama}}
        </td>
        <td>
            {{$perawat->jenis_kelamin}}
        </td>
        <td>
            {{$perawat->tgl_lahir}}
        </td>
        <td>


          <form id="delete-form-{{ $perawat->id }}" action="{{route('perawat.destroy', $perawat->id) }}" method="POST">
            @csrf
            @method('DELETE')
          <button type="submit" class="btn btn-primary">Edit</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
        </td>
    </tr>
    
    @empty

    @endforelse
</table>
</body>
</html>
