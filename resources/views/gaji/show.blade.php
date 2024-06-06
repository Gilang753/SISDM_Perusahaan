@extends('dashboard')

@section('content')
<div class="container">
    <h1>Detail Gaji</h1>
    <table class="table">
        <tr>
            <th>ID Gaji</th>
            <td>{{ $gaji->id_gaji }}</td>
        </tr>
        <tr>
            <th>ID Pegawai</th>
            <td>{{ $gaji->id_pegawai }}</td>
        </tr>
        <tr>
            <th>ID Tunjangan</th>
            <td>{{ $gaji->id_tunjangan }}</td>
        </tr>
        <tr>
            <th>Tanggal Gaji</th>
            <td>{{ $gaji->tanggal_gaji }}</td>
        </tr>
        <tr>
            <th>Gaji Pokok</th>
            <td>{{ $gaji->gaji_pokok }}</td>
        </tr>
        <tr>
            <th>Gaji Lembur</th>
            <td>{{ $gaji->gaji_lembur }}</td>
        </tr>
        <tr>
            <th>Gaji Total</th>
            <td>{{ $gaji->gaji_total }}</td>
        </tr>
    </table>
    <a href="{{ route('gaji.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
