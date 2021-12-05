@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'ABSEN PEGAWAI')

<a href="/absen"> Kembali</a> <br><br>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
        <div class="container">
		    <div class="form-group">
                <label for="IDPegawai" class="col-sm-2 control-label"> Pegawai: </label>
                    <select id="IDPegawai" name="IDPegawai" required="required">
                    @foreach($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                    @endforeach
                    </select>
            </div>
            <div class="form-group">
                <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                    <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="tanggal" />
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
                <label for="status" class="col-sm-2 control-label"> Status: </label>
                    <input type="radio" id="hadir" name="status" value="H">
                <label for="hadir">HADIR</label>
                    <input type="radio" id="tidak" name="status" value="T" checked="checked">
                <label for="tidak">TIDAK HADIR</label><br>
            </div>

		    <input type="submit" value="Simpan Data">
        </div>
	</form>

@endsection

