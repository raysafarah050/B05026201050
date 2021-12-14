@extends('layout.ceria')

@section('title', 'DATA TUMBUHAN')

@section('isikonten')

@section('judulhalaman', 'Data Tumbuhan')

<a href="/tumbuhan"> Kembali </a> <br><br>

	<form action="/tumbuhan/store" method="post">
		{{ csrf_field() }}
		<div class="container">
            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama Tumbuhan: </label>
                <input type="text" name="nama" required="required">
            </div>
            <div class="form-group">
		        <label for="jumlah" class="col-sm-2 control-label">Jumlah Tumbuhan: </label>
                <input type="text" name="jumlah" required="required">
            </div>
            <div class="form-group">
                <label for="ketersediaan" class="col-sm-2 control-label">Tersedia: </label>
                    <input type="radio" id="ya" name="ketersediaan" value="Y" checked="checked">
                <label for="ya">YA</label>
                    <input type="radio" id="tidaktersedia" name="ketersediaan" value="T">
                <label for="tidaktersedia">TIDAK TERSEDIA</label><br>
            </div>

		    <input type="submit" value="Simpan Data">
        </div>
	</form>

</body>
</html>
@endsection
