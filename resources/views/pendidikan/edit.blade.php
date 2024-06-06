@extends('dashboard')

@section('content')
<div class="container">
    <h1>Edit Pendidikan</h1>
    <form action="{{ route('pendidikan.update', $pendidikan->id_pendidikan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_pegawai">ID Pegawai:</label>
            <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" value="{{ $pendidikan->id_pegawai }}" required>
        </div>
        <div class="form-group">
            <label for="id_pengembangan">ID Pengembangan:</label>
            <input type="text" class="form-control" id="id_pengembangan" name="id_pengembangan" value="{{ $pendidikan->id_pengembangan }}" required>
        </div>
        <div class="form-group">
            <label for="jenjangPendidikan">Jenjang Pendidikan:</label>
            <input type="text" class="form-control" id="jenjangPendidikan" name="jenjangPendidikan" value="{{ $pendidikan->jenjangPendidikan }}" required>
        </div>
        <div class="form-group">
            <label for="institusiPendidikan">Institusi Pendidikan:</label>
            <input type="text" class="form-control" id="institusiPendidikan" name="institusiPendidikan" value="{{ $pendidikan->institusiPendidikan }}" required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $pendidikan->jurusan }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal_kelulusan">Tanggal Kelulusan:</label>
            <input type="date" class="form-control" id="tanggal_kelulusan" name="tanggal_kelulusan" value="{{ $pendidikan->tanggal_kelulusan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
