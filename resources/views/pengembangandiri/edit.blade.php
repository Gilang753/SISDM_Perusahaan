@extends('dashboard')

@section('content')
<div class="container">
    <h1>Edit Pengembangan Diri</h1>
    <form action="{{ route('pengembangandiri.update', $pengembangan->id_pengembangan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_pegawai">ID Pegawai:</label>
            <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" value="{{ $pengembangan->id_pegawai }}" required>
        </div>
        <div class="form-group">
            <label for="jenis_pelatihan">Jenis Pelatihan:</label>
            <input type="text" class="form-control" id="jenis_pelatihan" name="jenis_pelatihan" value="{{ $pengembangan->jenis_pelatihan }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal_pelaksanaan">Tanggal Pelaksanaan:</label>
            <input type="date" class="form-control" id="tanggal_pelaksanaan" name="tanggal_pelaksanaan" value="{{ $pengembangan->tanggal_pelaksanaan }}" required>
        </div>
        <div class="form-group">
            <label for="sertifikat">Sertifikat:</label>
            <input type="text" class="form-control" id="sertifikat" name="sertifikat" value="{{ $pengembangan->sertifikat }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
