<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perawat</title>
</head>
<body>
<form action="{{ route('no_antrian.store') }}" method="post">
    @csrf
<table>
    <tr>
        <td>
            No Antrian
        </td>
        <td>
            Nama Pasien
        </td>
        <td>
            Tanggal Berobat
        </td>
        <td>
            Aksi
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" name="no_antrian">
        </td>
        <td>
            <input type="text" name="nama">
        </td>
        <td>
            <input type="date" name="tgl_berobat" >
        </td>
        <td>
            <button type="submit">Tambah</button>
        </td>
    </tr>
</table>
</form>
</body>
</html>
