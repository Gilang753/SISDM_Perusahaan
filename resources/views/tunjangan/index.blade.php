@extends('dashboard')

@section('content')
<div class="container">
    <h1>Data Tunjangan</h1>
    <a href="{{ route('tunjangan.create') }}" class="btn btn-primary">Tambah Tunjangan</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID Tunjangan</th>
                <th>Nama Tunjangan</th>
                <th>Besaran Tunjangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_tunjangan as $tunjangan)
            <tr>
                <td>{{ $tunjangan->id_tunjangan }}</td>
                <td>{{ $tunjangan->nama_tunjangan }}</td>
                <td>{{ $tunjangan->besaran_tunjangan }}</td>
                <td>
                    <a href="{{ route('tunjangan.show', $tunjangan->id_tunjangan) }}" class="btn btn-info">View</a>
                    <a href="{{ route('tunjangan.edit', $tunjangan->id_tunjangan) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('tunjangan.destroy', $tunjangan->id_tunjangan) }}" method="POST" style="display:inline;">
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
