<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mata Kuliah</title>
</head>
<body>

<h2>Daftar Mata Kuliah</h2>

<a href="/matakuliah/create">Tambah Mata Kuliah</a>

<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>Kode MK</th>
        <th>Nama MK</th>
        <th>SKS</th>
        <th>Semester</th>
        <th>Dosen Pengampu</th>
    </tr>

    @foreach ($matakuliahs as $matakuliah)
    <tr>
        <td>{{ $matakuliah->kode_mk }}</td>
        <td>{{ $matakuliah->nama_mk }}</td>
        <td>{{ $matakuliah->sks }}</td>
        <td>{{ $matakuliah->semester }}</td>
        <td>{{ $matakuliah->dosen->name ?? '-' }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>