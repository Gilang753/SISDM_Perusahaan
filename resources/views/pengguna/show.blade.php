@extends('dashboard')

@section('content')
<div class="container">
    <h1>Detail Pengguna</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $pengguna->id_pengguna }}</td>
        </tr>
        <tr>
            <th>ID Pegawai</th>
            <td>{{ $pengguna->id_pegawai }}</td>
        </tr>
        <tr>
            <th>Username</th>
            <td>{{ $pengguna->username }}</td>
        </tr>
        <tr>
            <th>Password</th>
            <td>{{ $pengguna->password }}</td>
        </tr>
    </table>
    <a href="{{ route('pengguna.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
