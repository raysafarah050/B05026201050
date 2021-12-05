@extends('layout.ceria')

@section('title', 'DATA MUTASI PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'Data Mutasi Pegawai')

	<a href="/mutasi/tambah" class="btn btn-primary"> + Tambah Data Mutasi Baru</a>

	<br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>

			<th>ID</th>
            <th>IDPegawai</th>
			<th>Departemen</th>
			<th>SubDepartemen</th>
			<th>MulaiBertugas</th>
            <th>Opsi</th>

		</tr>
		@foreach($mutasi as $m)
		<tr>

			<td>{{ $m->mutasi_id }}</td>
            <td>{{ $m->mutasi_idpegawai }}</td>
			<td>{{ $m->mutasi_departemen }}</td>
			<td>{{ $m->mutasi_subdepartemen }}</td>
            <td>{{ $m->mutasi_mulaibertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $m->mutasi_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->mutasi_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>
@endsection
