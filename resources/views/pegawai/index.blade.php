@extends('dashboard')

@section('content')
<div class="container">
    <h1>Data Pegawai</h1>
    <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Pegawai</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Usia</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_pegawai as $pegawai)
            <tr>
                <td>{{ $pegawai->id_pegawai }}</td>
                <td>{{ $pegawai->nama }}</td>
                <td>{{ $pegawai->tanggal_lahir }}</td>
                <td>{{ $pegawai->usia }}</td>
                <td>{{ $pegawai->alamat }}</td>
                <td>{{ $pegawai->jenis_kelamin }}</td>
                <td>{{ $pegawai->status }}</td>
                <td>
                    <a href="{{ route('pegawai.show', $pegawai->id_pegawai) }}" class="btn btn-info">View</a>
                    <a href="{{ route('pegawai.edit', $pegawai->id_pegawai) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pegawai.destroy', $pegawai->id_pegawai) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
