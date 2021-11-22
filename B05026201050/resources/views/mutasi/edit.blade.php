<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Pada Laravel - Mutasi</title>
</head>
<body>

	<h2>Raysa Farah Mumtaz Ramadina 5026201050</h2>
	<h3>Edit Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->mutasi_id }}"> <br/>
		ID Pegawai <input type="number" required="required" name="idpegawai" value="{{ $m->mutasi_idpegawai }}"> <br/>
		Departemen <input type="text" required="required" name="departemen" value="{{ $m->mutasi_departemen }}"> <br/>
		Sub Departemen <input type="text" required="required" name="subdepartemen" value="{{ $m->mutasi_subdepartemen }}"> <br/>
		Mulai Bertugas <input type="datetime-local" required="required" name="mulaibertugas" value="{{ $m->mutasi_mulaibertugas }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
