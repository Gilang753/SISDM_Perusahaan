@extends('dashboard')

@section('content')
<div class="container">
    <h1>Tambah Absensi</h1>
    <form action="{{ route('absensi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_pegawai">ID Pegawai:</label>
            <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" required>
        </div>
        <div class="form-group">
            <label for="tanggal_absensi">Tanggal Absensi:</label>
            <input type="date" class="form-control" id="tanggal_absensi" name="tanggal_absensi" required>
        </div>
        <div class="form-group">
            <label for="jam_masuk">Jam Masuk:</label>
            <input type="time" class="form-control" id="jam_masuk" name="jam_masuk" required>
        </div>
        <div class="form-group">
            <label for="jam_pulang">Jam Pulang:</label>
            <input type="time" class="form-control" id="jam_pulang" name="jam_pulang" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan:</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
