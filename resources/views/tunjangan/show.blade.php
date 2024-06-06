@extends('dashboard')

@section('content')
<div class="container">
    <h1>Detail Tunjangan</h1>
    <table class="table">
        <tr>
            <th>ID Tunjangan</th>
            <td>{{ $tunjangan->id_tunjangan }}</td>
        </tr>
        <tr>
            <th>Nama Tunjangan</th>
            <td>{{ $tunjangan->nama_tunjangan }}</td>
        </tr>
        <tr>
            <th>Besaran Tunjangan</th>
            <td>{{ $tunjangan->besaran_tunjangan }}</td>
        </tr>
    </table>
    <a href="{{ route('tunjangan.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
