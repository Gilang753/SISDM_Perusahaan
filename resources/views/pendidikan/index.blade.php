@extends('dashboard')

@section('content')
<div class="container">
    <h1>Data Pendidikan</h1>
    <a href="{{ route('pendidikan.create') }}" class="btn btn-primary">Tambah Pendidikan</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID Pendidikan</th>
                <th>ID Pegawai</th>
                <th>ID Pengembangan</th>
                <th>Jenjang Pendidikan</th>
                <th>Institusi Pendidikan</th>
                <th>Jurusan</th>
                <th>Tanggal Kelulusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_pendidikan as $pendidikan)
            <tr>
                <td>{{ $pendidikan->id_pendidikan }}</td>
                <td>{{ $pendidikan->id_pegawai }}</td>
                <td>{{ $pendidikan->id_pengembangan }}</td>
                <td>{{ $pendidikan->jenjangPendidikan }}</td>
                <td>{{ $pendidikan->institusiPendidikan }}</td>
                <td>{{ $pendidikan->jurusan }}</td>
                <td>{{ $pendidikan->tanggal_kelulusan }}</td>
                <td>
                    <a href="{{ route('pendidikan.show', $pendidikan->id_pendidikan) }}" class="btn btn-info">View</a>
                    <a href="{{ route('pendidikan.edit', $pendidikan->id_pendidikan) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pendidikan.destroy', $pendidikan->id_pendidikan) }}" method="POST" style="display:inline;">
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
