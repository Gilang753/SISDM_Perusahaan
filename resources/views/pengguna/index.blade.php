@extends('dashboard')

@section('content')
<div class="container">
    <h1>Data Pengguna</h1>
    <a href="{{ route('pengguna.create') }}" class="btn btn-primary">Tambah Pengguna</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Pegawai</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_pengguna as $pengguna)
            <tr>
                <td>{{ $pengguna->id_pengguna }}</td>
                <td>{{ $pengguna->id_pegawai }}</td>
                <td>{{ $pengguna->username }}</td>
                <td>
                    <a href="{{ route('pengguna.show', $pengguna->id_pengguna) }}" class="btn btn-info">View</a>
                    <a href="{{ route('pengguna.edit', $pengguna->id_pengguna) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pengguna.destroy', $pengguna->id_pengguna) }}" method="POST" style="display:inline;">
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
