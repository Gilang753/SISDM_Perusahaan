@extends('dashboard')

@section('content')
<div class="container">
    <h1>Data Gaji</h1>
    <a href="{{ route('gaji.create') }}" class="btn btn-primary">Tambah Gaji</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID Gaji</th>
                <th>ID Pegawai</th>
                <th>ID Tunjangan</th>
                <th>Tanggal Gaji</th>
                <th>Gaji Pokok</th>
                <th>Gaji Lembur</th>
                <th>Gaji Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tb_gaji as $gaji)
            <tr>
                <td>{{ $gaji->id_gaji }}</td>
                <td>{{ $gaji->id_pegawai }}</td>
                <td>{{ $gaji->id_tunjangan }}</td>
                <td>{{ $gaji->tanggal_gaji }}</td>
                <td>{{ $gaji->gaji_pokok }}</td>
                <td>{{ $gaji->gaji_lembur }}</td>
                <td>{{ $gaji->gaji_total }}</td>
                <td>
                    <a href="{{ route('gaji.show', $gaji->id_gaji) }}" class="btn btn-info">View</a>
                    <a href="{{ route('gaji.edit', $gaji->id_gaji) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('gaji.destroy', $gaji->id_gaji) }}" method="POST" style="display:inline;">
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
