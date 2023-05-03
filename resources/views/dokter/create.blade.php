<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokter</title>
</head>
<body>
<form action="{{ route('dokter.store') }}" method="post" enctype="multipart/form-data">
    @csrf
<table>
    <tr>
        <td>
            Nama Dokter
        </td>
        <td>
            Photo
        </td>
        <td>
            Jenis Kelamin
        </td>
        <td>
            Tanggal Lahir
        </td>
        <td>
            Aksi
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" name="nama">
        </td>
        <td>
            <input type="file" name="image">
        </td>
        <td>
            <input type="radio" name="jenis_kelamin" value="laki-laki">laki laki
            <input type="radio" name="jenis_kelamin" value="perempuan">perempuan
        </td>
        <td>
            <input type="date" name="tgl_lahir" >
        </td>
        <td>
            <button type="submit">Tambah</button>
        </td>
    </tr>
</table>
</form>
</body>
</html>
