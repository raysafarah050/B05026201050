<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Pada Laravel - Mutasi</title>
</head>
<body>

	<h2>Raysa Farah Mumtaz Ramadina 5026201050</h2>
	<h3>Data Mutasi</h3>

	<a href="/mutasi/tambah"> + Tambah Data Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>

			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
			<th>Mulai Bertugas</th>
            <th>Opsi</th>

		</tr>
		@foreach($mutasi as $m)
		<tr>

			<td>{{ $m->mutasi_idpegawai }}</td>
			<td>{{ $m->mutasi_departemen }}</td>
			<td>{{ $m->mutasi_subdepartemen }}</td>
            <td>{{ $m->mutasi_mulaibertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $m->mutasi_id }}">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->mutasi_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
