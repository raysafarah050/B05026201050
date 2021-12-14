@extends('layout.ceria')

@section('title', 'DATA MUTASI PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'Data Mutasi Pegawai')

	<a href="/mutasi/tambah" class="btn btn-primary"> + Tambah Data Mutasi Baru</a>

	<br/>
	<br/>

    <div class="container">
        <form action="/mutasi/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Pegawai atau Departemen.." value="{{ old('cari') }}">
            <input type="submit" value="CARI">
        </form> </div>

    <br>

	<table class="table table-success table-striped">
		<tr>


            <th>Nama Pegawai</th>
			<th>Departemen</th>
			<th>MulaiBertugas</th>
            <th>Opsi</th>

		</tr>
		@foreach($mutasi as $m)
		<tr>


            <td>{{ $m->pegawai_nama }}</td>
			<td>{{ $m->mutasi_departemen }}</td>
            <td>{{ $m->mutasi_mulaibertugas }}</td>
			<td>

                <a href="/mutasi/view/{{ $m->mutasi_id }}" class="btn btn-info">View Detail</a>
                |
                <a href="/mutasi/edit/{{ $m->mutasi_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->mutasi_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $mutasi->links() }}
</body>
</html>
@endsection
