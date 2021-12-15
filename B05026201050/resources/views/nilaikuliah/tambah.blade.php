@extends('layout.ceria')

@section('title', 'DATA NILAI KULIAH')

@section('isikonten')

@section('judulhalaman', 'Tambah Data Nilai Kuliah')

<a href="/nilaikuliah"> Kembali </a> <br><br>

	<form action="/nilaikuliah/store" method="post">
		{{ csrf_field() }}
		<div class="container">
            <div class="form-group">
                <label for="nrp" class="col-sm-2 control-label">NRP: </label>
                <input type="text" name="nrp" required="required">
            </div>
            <div class="form-group">
		        <label for="nilaiangka" class="col-sm-2 control-label">Nilai Angka: </label>
                <input type="number" name="nilaiangka" required="required">
            </div>
            <div class="form-group">
		        <label for="sks" class="col-sm-2 control-label">SKS: </label>
                <input type="number" name="sks" required="required">
            </div>
		    <input type="submit" value="Simpan Data">
        </div>
	</form>

</body>
</html>
@endsection
