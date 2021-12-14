@extends('layout.ceria')

@section('title', 'DATA ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'Data Absen Pegawai')

	<a href="/absen/tambah" class="btn btn-primary" > + Tambah Absen Pegawai Baru</a>

	<br/>
	<br/>

    <div class="container">
        <form action="/absen/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Pegawai atau Tanggal.." value="{{ old('cari') }}">
            <input type="submit" value="CARI">
        </form> </div>

    <br>

	<table class="table table-success table-striped">
		<tr>

			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>

                <a href="/absen/view/{{ $a->ID }}" class="btn btn-info">View Detail</a>
                |
                <a href="/absen/edit/{{ $a->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <p> Keterangan: </p>
    <p> H = Hadir </p>
    <p> T = Tidak Hadir </p>

    {{ $absen->links() }}

</body>
</html>
@endsection
