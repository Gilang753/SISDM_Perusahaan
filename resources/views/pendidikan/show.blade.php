@extends('dashboard')

@section('content')
<div class="container">
    <h1>Detail Pendidikan</h1>
    <table class="table">
        <tr>
            <th>ID Pendidikan</th>
            <td>{{ $pendidikan->id_pendidikan }}</td>
        </tr>
        <tr>
            <th>ID Pegawai</th>
            <td>{{ $pendidikan->id_pegawai }}</td>
        </tr>
        <tr>
            <th>ID Pengembangan</th>
            <td>{{ $pendidikan->id_pengembangan }}</td>
        </tr>
        <tr>
            <th>Jenjang Pendidikan</th>
            <td>{{ $pendidikan->jenjangPendidikan }}</td>
        </tr>
        <tr>
            <th>Institusi Pendidikan</th>
            <td>{{ $pendidikan->institusiPendidikan }}</td>
        </tr>
        <tr>
            <th>Jurusan</th>
            <td>{{ $pendidikan->jurusan }}</td>
        </tr>
        <tr>
            <th>Tanggal Kelulusan</th>
            <td>{{ $pendidikan->tanggal_kelulusan }}</td>
        </tr>
    </table>
    <a href="{{ route('pendidikan.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
