@extends('dashboard')

@section('content')
<div class="container">
    <h1>Data Absensi</h1>
    <a href="{{ route('absensi.create') }}" class="btn btn-primary">Tambah Absensi</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Pegawai</th>
                <th>Tanggal Absensi</th>
                <th>Jam Masuk</th>
                <th>Jam Pulang</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_absensi as $absensi)
            <tr>
                <td>{{ $absensi->id_absensi }}</td>
                <td>{{ $absensi->id_pegawai }}</td>
                <td>{{ $absensi->tanggal_absensi }}</td>
                <td>{{ $absensi->jam_masuk }}</td>
                <td>{{ $absensi->jam_pulang }}</td>
                <td>{{ $absensi->keterangan }}</td>
                <td>
                    <a href="{{ route('absensi.show', $absensi->id_absensi) }}" class="btn btn-info">View</a>
                    <a href="{{ route('absensi.edit', $absensi->id_absensi) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('absensi.destroy', $absensi->id_absensi) }}" method="POST" style="display:inline;">
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
