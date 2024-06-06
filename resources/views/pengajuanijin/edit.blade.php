@extends('dashboard')

@section('content')
<div class="container">
    <h1>Edit Pengajuan Ijin</h1>
    <form action="{{ route('pengajuanijin.update', $pengajuanijin->id_pengajuan) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_pegawai">ID Pegawai:</label>
            <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" value="{{ $pengajuanijin->id_pegawai }}" required>
        </div>
        <div class="form-group">
            <label for="id_jenisijin">ID Jenis Ijin:</label>
            <input type="text" class="form-control" id="id_jenisijin" name="id_jenisijin" value="{{ $pengajuanijin->id_jenisijin }}" required>
        </div>
        <div class="form-group">
            <label for="tanggalPengajuan">Tanggal Pengajuan:</label>
            <input type="date" class="form-control" id="tanggalPengajuan" name="tanggalPengajuan" value="{{ $pengajuanijin->tanggalPengajuan }}" required>
        </div>
        <div class="form-group">
            <label for="statusPengajuan">Status Pengajuan:</label>
            <input type="text" class="form-control" id="statusPengajuan" name="statusPengajuan" value="{{ $pengajuanijin->statusPengajuan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

