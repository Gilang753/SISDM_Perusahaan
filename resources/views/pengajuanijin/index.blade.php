@extends('dashboard')

@section('content')
<div class="container">
    <h1>Data Pengajuan Ijin</h1>
    <a href="{{ route('pengajuanijin.create') }}" class="btn btn-primary">Tambah Pengajuan Ijin</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Pegawai</th>
                <th>ID Jenis Ijin</th>
                <th>Tanggal Pengajuan</th>
                <th>Status Pengajuan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_pengajuanijin as $pengajuanijin)
            <tr>
                <td>{{ $pengajuanijin->id_pengajuan }}</td>
                <td>{{ $pengajuanijin->id_pegawai }}</td>
                <td>{{ $pengajuanijin->id_jenisijin }}</td>
                <td>{{ $pengajuanijin->tanggalPengajuan }}</td>
                <td>{{ $pengajuanijin->statusPengajuan }}</td>
                <td>
                    <a href="{{ route('pengajuanijin.show', $pengajuanijin->id_pengajuan) }}" class="btn btn-info">View</a>
                    <a href="{{ route('pengajuanijin.edit', $pengajuanijin->id_pengajuan) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pengajuanijin.destroy', $pengajuanijin->id_pengajuan) }}" method="POST" style="display:inline;">
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
