@extends('layout.ceria')

@section('title', 'DATA TUMBUHAN')

@section('isikonten')

@section('judulhalaman', 'Detail Data Tumbuhan')

<a href="/tumbuhan"> Kembali</a> <br><br>

	@foreach($tumbuhan as $t)



        <div class="container">
            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Nama Tumbuhan: </label>
                {{ $t->namatumbuhan }}
            </div>
            <div class="form-group">
		        <label for="jabatan" class="col-sm-2 control-label">Jumlah Tumbuhan: </label>
                {{ $t->jumlahtumbuhan }}
            </div>
            <div class="form-group">
                <label for="ketersediaan" class="col-sm-2 control-label">Tersedia: </label>
                    @if ($t->tersedia === "Y") {{ "Ya" }}
                    @else ($t->tersedia === "T") {{ "Tidak Tersedia" }}
                    @endif

        </div>

	@endforeach


</body>
</html>
@endsection
