<!DOCTYPE html>
<html>
<head>
    <title>Data Akademik</title>
</head>
<body>

<h1>Manajemen Data Akademik</h1>

<h2>Daftar Mata Kuliah</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Kode MK</th>
        <th>Nama Mata Kuliah</th>
        <th>SKS</th>
        <th>Semester</th>
        <th>Dosen Pengampu</th>
    </tr>

    @foreach ($matakuliahs as $index => $matakuliah)
    <tr>
        <td>{{ $index + 1 }}</td>
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