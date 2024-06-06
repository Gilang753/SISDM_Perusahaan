@extends('dashboard')

@section('content')
<div class="container">
    <h1>Detail Jenis Ijin</h1>
    <table class="table">
        <tr>
            <th>ID Jenis Ijin</th>
            <td>{{ $jenisijin->id_jenisijin }}</td>
        </tr>
        <tr>
            <th>Persyaratan</th>
            <td>{{ $jenisijin->persyaratan }}</td>
        </tr>
        <tr>
            <th>Lama Ijin</th>
            <td>{{ $jenisijin->lamaijin }}</td>
        </tr>
        <tr>
            <th>Ketentuan</th>
            <td>{{ $jenisijin->ketentuan }}</td>
        </tr>
    </table>
    <a href="{{ route('jenisijin.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
