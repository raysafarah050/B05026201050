@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT ABSEN')

<a href="/absen"> Kembali</a>

	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        <div class="container">
            <div class="form-group">
                <label for="IDPegawai" class="col-sm-2 control-label">Pegawai: </label>
                <select id="IDPegawai" name="IDPegawai" required="required">
                @foreach($pegawai as $peg)
                    <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                    <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="tanggal" value="{{ $p->Tanggal }}"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                });
            </script>
            <br>
		    <div class="form-group">
                <label for="status" class="col-sm-2 control-label">Status: </label>
                    <input type="radio" id="hadir" name="status" value="H" @if ($p->Status === "H") checked="checked" @endif>
                <label for="hadir">HADIR</label>
                    <input type="radio" id="tidak" name="status" value="T" @if ($p->Status === "T") checked="checked" @endif>
                <label for="tidak">TIDAK HADIR</label><br>
            </div>

		    <input type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach


    @endsection
