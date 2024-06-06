@extends('dashboard')

@section('content')
<div class="container">
    <h1>Detail Absensi</h1>
    <table class="table">
        <tr>
            <th>ID Absensi</th>
            <td>{{ $absensi->id_absensi }}</td>
        </tr>
        <tr>
            <th>ID Pegawai</th>
            <td>{{ $absensi->id_pegawai }}</td>
        </tr>
        <tr>
            <th>Tanggal Absensi</th>
            <td>{{ $absensi->tanggal_absensi }}</td>
        </tr>
        <tr>
            <th>Jam Masuk</th>
            <td>{{ $absensi->jam_masuk }}</td>
        </tr>
        <tr>
            <th>Jam Pulang</th>
            <td>{{ $absensi->jam_pulang }}</td>
        </tr>
        <tr>
            <th>Keterangan</th>
            <td>{{ $absensi->keterangan }}</td>
        </tr>
    </table>
    <a href="{{ route('absensi.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection

