@extends('layout.ceria')

@section('title', 'EDIT DATA TUMBUHAN')

@section('isikonten')

@section('judulhalaman', 'Edit Data Tumbuhan')

<a href="/tumbuhan"> Kembali</a>

	@foreach($tumbuhan as $t)
	<form action="/tumbuhan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->kodetumbuhan }}"> <br/>
        <div class="container">
            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama Tumbuhan: </label>
                <input type="text" name="nama" required="required" value="{{ $t->namatumbuhan }}">
            </div>
            <div class="form-group">
		        <label for="jumlah" class="col-sm-2 control-label">Jumlah Tumbuhan: </label>
                <input type="text" name="jumlah" required="required" value="{{ $t->jumlahtumbuhan }}">
            </div>

		    <div class="form-group">
                <label for="ketersediaan" class="col-sm-2 control-label">Tersedia: </label>
                    <input type="radio" id="ya" name="ketersediaan" value="Y" @if ($t->tersedia === "Y") checked="checked" @endif>
                <label for="ya">YA</label>
                    <input type="radio" id="tidaktersedia" name="ketersediaan" value="T" @if ($t->tersedia === "T") checked="checked" @endif>
                <label for="tidaktersedia">TIDAK TERSEDIA</label><br>
            </div>

		    <input type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach


    @endsection

