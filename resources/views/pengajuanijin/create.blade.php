@extends('dashboard')

@section('content')
<div class="container">
    <h1>Tambah Pengajuan Ijin</h1>
    <form action="{{ route('pengajuanijin.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_pegawai">ID Pegawai:</label>
            <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" required>
        </div>
        <div class="form-group">
            <label for="id_jenisijin">ID Jenis Ijin:</label>
            <input type="text" class="form-control" id="id_jenisijin" name="id_jenisijin" required>
        </div>
        <div class="form-group">
            <label for="tanggalPengajuan">Tanggal Pengajuan:</label>
            <input type="date" class="form-control" id="tanggalPengajuan" name="tanggalPengajuan" required>
        </div>
        <div class="form-group">
            <label for="statusPengajuan">Status Pengajuan:</label>
            <input type="text" class="form-control" id="statusPengajuan" name="statusPengajuan" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
