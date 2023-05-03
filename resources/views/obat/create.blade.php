<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Obat</title>
</head>
<body>
<form action="{{ route('obat.store') }}" method="post">
    @csrf
<table>
    <tr>
        <td>
            Keluhan
        </td>
        <td>
            Tanggal Berobat
        </td>
        <td>
            Biaya
        </td>
        <td>
            Aksi
        </td>
    </tr>
    <tr>
        <td>
            <input type="text" name="keluhan">
        </td>
        <td>
            <input type="date" name="tgl_berobat" >
        </td>
        <td>
            <input type="text" name="biaya" >
        </td>
        <td>
            <button type="submit">Tambah</button>
        </td>
    </tr>
</table>
</form>
</body>
</html>
