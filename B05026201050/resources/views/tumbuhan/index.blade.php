@extends('layout.ceria')

@section('title', 'DATA TUMBUHAN')

@section('isikonten')

@section('judulhalaman', 'Data Tumbuhan')

	<a href="/tumbuhan/tambah" class="btn btn-primary"> + Tambah Tumbuhan Baru</a>

	<br/>
	<br/>

    <div class="container">
    <form action="/tumbuhan/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Tumbuhan.." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form> </div>

    <br>

	<table class="table table-success table-striped">
		<tr>
			<th>Nama Tumbuhan</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($tumbuhan as $t)
		<tr>
			<td>{{ $t->namatumbuhan }}</td>

            <td>{{ $t->tersedia }}</td>
			<td>
                <a href="/tumbuhan/view/{{ $t->kodetumbuhan }}" class="btn btn-info">View Detail</a>
                |
				<a href="/tumbuhan/edit/{{ $t->kodetumbuhan }}" class="btn btn-warning">Edit</a>
				|
				<a href="/tumbuhan/hapus/{{ $t->kodetumbuhan }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <p> Keterangan: </p>
    <p> Y = Ya </p>
    <p> T = Tidak Tersedia </p>

    {{ $tumbuhan->links() }}

</body>
</html>
@endsection
