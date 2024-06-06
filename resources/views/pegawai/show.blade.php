@extends('dashboard')

@section('content')
<div class="container">
    <h1>Detail Pegawai</h1>
    <table class="table">
        <tr>
            <th>ID Pegawai</th>
            <td>{{ $pegawai->id_pegawai }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $pegawai->nama }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $pegawai->tanggal_lahir }}</td>
        </tr>
        <tr>
            <th>Usia</th>
            <td>{{ $pegawai->usia }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $pegawai->alamat }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $pegawai->jenis_kelamin }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $pegawai->status }}</td>
        </tr>
    </table>
    <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
