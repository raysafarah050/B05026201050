@extends('layout.ceria')

@section('title', 'DATA PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'Data Pegawai')

	<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

    <div class="container">
    <form action="/pegawai/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Pegawai atau Alamat.." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form> </div>

    <br>

	<table class="table table-success table-striped">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>

			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-info">View Detail</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}

</body>
</html>
@endsection
