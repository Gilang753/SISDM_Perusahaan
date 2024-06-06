@extends('dashboard')

@section('content')
<div class="container">
    <h1>Detail Pengajuan Ijin</h1>
    <table class="table">
        <tr>
            <th>ID Pengajuan</th>
            <td>{{ $pengajuanijin->id_pengajuan }}</td>
        </tr>
        <tr>
            <th>ID Pegawai</th>
            <td>{{ $pengajuanijin->id_pegawai }}</td>
        </tr>
        <tr>
            <th>ID Jenis Ijin</th>
            <td>{{ $pengajuanijin->id_jenisijin }}</td>
        </tr>
        <tr>
            <th>Tanggal Pengajuan</th>
            <td>{{ $pengajuanijin->tanggalPengajuan }}</td>
        </tr>
        <tr>
            <th>Status Pengajuan</th>
            <td>{{ $pengajuanijin->statusPengajuan }}</td>
        </tr>
    </table>
    <a href="{{ route('pengajuanijin.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
