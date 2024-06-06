@extends('dashboard')

@section('content')
<div class="container">
    <h1>Detail Pengembangan Diri</h1>
    <table class="table">
        <tr>
            <th>ID Pengembangan</th>
            <td>{{ $pengembangan->id_pengembangan }}</td>
        </tr>
        <tr>
            <th>ID Pegawai</th>
            <td>{{ $pengembangan->id_pegawai }}</td>
        </tr>
        <tr>
            <th>Jenis Pelatihan</th>
            <td>{{ $pengembangan->jenis_pelatihan }}</td>
        </tr>
        <tr>
            <th>Tanggal Pelaksanaan</th>
            <td>{{ $pengembangan->tanggal_pelaksanaan }}</td>
        </tr>
        <tr>
            <th>Sertifikat</th>
            <td>{{ $pengembangan->sertifikat }}</td>
        </tr>
    </table>
    <a href="{{ route('pengembangandiri.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
