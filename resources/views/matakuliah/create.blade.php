<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
</head>
<body>

<h2>Tambah Mata Kuliah</h2>

<form action="/matakuliah" method="POST">

    @csrf

    <label>Kode MK</label><br>
    <input type="text" name="kode_mk">
    <br><br>

    <label>Nama MK</label><br>
    <input type="text" name="nama_mk">
    <br><br>

    <label>SKS</label><br>
    <input type="number" name="sks">
    <br><br>

    <label>Semester</label><br>
    <input type="number" name="semester">
    <br><br>

    <label>Dosen Pengampu</label><br>
    <select name="dosen_id">
        <option value="">-- Pilih Dosen --</option>

        @foreach ($dosens as $dosen)
            <option value="{{ $dosen->id }}">
                {{ $dosen->name }}
            </option>
        @endforeach
    </select>

    <br><br>

    <button type="submit">Simpan</button>

</form>

</body>
</html>