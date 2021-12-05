@extends('layout.ceria')

@section('title', 'DATA PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'Data Pegawai')

<a href="/pegawai"> Kembali </a> <br><br>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		<div class="container">
            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama: </label>
                <input type="text" name="nama" required="required">
            </div>
            <div class="form-group">
		        <label for="jabatan" class="col-sm-2 control-label">Jabatan: </label>
                <input type="text" name="jabatan" required="required">
            </div>
            <div class="form-group">
		        <label for="umur" class="col-sm-2 control-label">Umur: </label>
                <input type="number" name="umur" required="required">
            </div>
            <div class="form-group">
		        <label for="alamat" class="col-sm-2 control-label">Alamat: </label>
                <textarea name="alamat" required="required"></textarea>
            </div>
		    <input type="submit" value="Simpan Data">
        </div>
	</form>

</body>
</html>
@endsection
