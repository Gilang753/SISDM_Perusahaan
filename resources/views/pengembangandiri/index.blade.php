@extends('dashboard')

@section('content')
<div class="container">
    <h1>Data Pengembangan Diri</h1>
    <a href="{{ route('pengembangandiri.create') }}" class="btn btn-primary">Tambah Pengembangan Diri</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID Pengembangan</th>
                <th>ID Pegawai</th>
                <th>Jenis Pelatihan</th>
                <th>Tanggal Pelaksanaan</th>
                <th>Sertifikat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_pengembangandiri as $pengembangan)
            <tr>
                <td>{{ $pengembangan->id_pengembangan }}</td>
                <td>{{ $pengembangan->id_pegawai }}</td>
                <td>{{ $pengembangan->jenis_pelatihan }}</td>
                <td>{{ $pengembangan->tanggal_pelaksanaan }}</td>
                <td>{{ $pengembangan->sertifikat }}</td>
                <td>
                    <a href="{{ route('pengembangandiri.show', $pengembangan->id_pengembangan) }}" class="btn btn-info">View</a>
                    <a href="{{ route('pengembangandiri.edit', $pengembangan->id_pengembangan) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pengembangandiri.destroy', $pengembangan->id_pengembangan) }}" method="POST" style="display:inline;">
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
