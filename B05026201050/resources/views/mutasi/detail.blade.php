@extends('layout.ceria')

@section('title', 'DATA MUTASI PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'Detail Data Mutasi Pegawai')

<a href="/mutasi"> Kembali</a>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->mutasi_id }}"> <br/>
        <div class="container">
            <div class="form-group">
                <label for="idpegawai" class="col-sm-2 control-label">Pegawai: </label>
                    {{ $m->pegawai_nama }}
                </select>
            </div>

            <div class="form-group">
                <label for="departemen" class="col-sm-2 control-label">Departemen: </label>
                    {{ $m->mutasi_departemen }}
            </div>

		    <div class="form-group">
		        <label for="subdepartemen" class="col-sm-2 control-label">Sub Departemen: </label>
                    {{ $m->mutasi_subdepartemen }}
            </div>

            <div class="form-group">
                <label for="dtpickerdemo" class="col-sm-2 control-label">Mulai Bertugas:</label>
                    {{ $m->mutasi_mulaibertugas }}
        </div>
	</form>
	@endforeach


</body>
</html>
@endsection
