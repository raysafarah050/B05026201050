@extends('layout.ceria')

@section('title', 'DATA PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'Data Pegawai')

	<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>
@endsection
