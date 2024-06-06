@extends('dashboard')

@section('content')
<div class="container">
    <h1>Data Jenis Ijin</h1>
    <a href="{{ route('jenisijin.create') }}" class="btn btn-primary">Tambah Jenis Ijin</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Persyaratan</th>
                <th>Lama Ijin</th>
                <th>Ketentuan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jenisijins as $jenisijin)
            <tr>
                <td>{{ $jenisijin->id_jenisijin }}</td>
                <td>{{ $jenisijin->persyaratan }}</td>
                <td>{{ $jenisijin->lamaijin }}</td>
                <td>{{ $jenisijin->ketentuan }}</td>
                <td>
                    <a href="{{ route('jenisijin.show', $jenisijin->id_jenisijin) }}" class="btn btn-info">View</a>
                    <a href="{{ route('jenisijin.edit', $jenisijin->id_jenisijin) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('jenisijin.destroy', $jenisijin->id_jenisijin) }}" method="POST" style="display:inline;">
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
