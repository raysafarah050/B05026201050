@extends('layout.ceria')

@section('title', 'DATA PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'Edit Data Pegawai')

<a href="/pegawai"> Kembali</a> <br><br>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="container">
            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama: </label>
                <input type="text" name="nama" required="required" value="{{ $p->pegawai_nama }}">
            </div>
            <div class="form-group">
		        <label for="jabatan" class="col-sm-2 control-label">Jabatan: </label>
                <input type="text" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}">
            </div>
            <div class="form-group">
		        <label for="umur" class="col-sm-2 control-label">Umur: </label>
                <input type="number" name="umur" required="required" value="{{ $p->pegawai_umur }}">
            </div>
            <div class="form-group">
		        <label for="alamat" class="col-sm-2 control-label">Alamat: </label>
                <textarea name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea>
            </div>
		    <input type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach


</body>
</html>
@endsection
