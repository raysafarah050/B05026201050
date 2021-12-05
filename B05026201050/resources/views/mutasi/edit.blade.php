@extends('layout.ceria')

@section('title', 'DATA MUTASI PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'Edit Data Mutasi Pegawai')

<a href="/mutasi"> Kembali</a>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->mutasi_id }}"> <br/>
        <div class="container">
            <div class="form-group">
                <label for="idpegawai" class="col-sm-2 control-label">Pegawai: </label>
                <select id="idpegawai" name="idpegawai" required="required">
                @foreach($pegawai as $p)
                    <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $m->mutasi_idpegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="departemen" class="col-sm-2 control-label">Departemen: </label>
                <input type="text"  name="departemen" required="required" value="{{ $m->mutasi_departemen }}">
            </div>

		    <div class="form-group">
		        <label for="subdepartemen" class="col-sm-2 control-label">Sub Departemen: </label>
                <input type="text" name="subdepartemen" required="required" value="{{ $m->mutasi_subdepartemen }}">
            </div>

            <div class="form-group">
                <label for="dtpickerdemo" class="col-sm-2 control-label">Mulai Bertugas:</label>
                    <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="mulaibertugas" value="{{ $m->mutasi_mulaibertugas }}">
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
		<input type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach


</body>
</html>
@endsection
