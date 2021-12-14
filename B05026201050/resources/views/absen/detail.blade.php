@extends('layout.ceria')

@section('title', 'DATA PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'Detail Data Absen')

<a href="/absen"> Kembali</a> <br><br>

	@foreach($absen as $a)

    <div class="container">
        <div class="form-group">
            <label for="IDPegawai" class="col-sm-2 control-label">Pegawai: </label>
                {{ $a->pegawai_nama }}
        </div>
        <div class="form-group">
            <label for="jabatan" class="col-sm-2 control-label">Jabatan: </label>
            {{ $a->pegawai_jabatan }}
        </div>
        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal:</label>
                {{ $a->Tanggal }}
        </div>
        <div class="form-group">
            <label for="status" class="col-sm-2 control-label">Status: </label>
                @if ($a->Status === "H") {{ "Hadir" }}
                @else ($a->Status === "T") {{ "Tidak Hadir" }}
                @endif
        </div>
    </div>

	@endforeach


</body>
</html>
@endsection
