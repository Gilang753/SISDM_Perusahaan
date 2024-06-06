@extends('dashboard')

@section('content')
<div class="container">
    <h1>Tambah Pendidikan</h1>
    <form action="{{ route('pendidikan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_pegawai">ID Pegawai:</label>
            <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" required>
        </div>
        <div class="form-group">
            <label for="id_pengembangan">ID Pengembangan:</label>
            <input type="text" class="form-control" id="id_pengembangan" name="id_pengembangan" required>
        </div>
        <div class="form-group">
            <label for="jenjangPendidikan">Jenjang Pendidikan:</label>
            <input type="text" class="form-control" id="jenjangPendidikan" name="jenjangPendidikan" required>
        </div>
        <div class="form-group">
            <label for="institusiPendidikan">Institusi Pendidikan:</label>
            <input type="text" class="form-control" id="institusiPendidikan" name="institusiPendidikan" required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
        </div>
        <div class="form-group">
            <label for="tanggal_kelulusan">Tanggal Kelulusan:</label>
            <input type="date" class="form-control" id="tanggal_kelulusan" name="tanggal_kelulusan" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
