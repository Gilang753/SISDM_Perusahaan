@extends('dashboard')

@section('content')
<div class="container">
    <h1>Edit Jenis Ijin</h1>
    <form action="{{ route('jenisijin.update', $jenisijin->id_jenisijin) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="persyaratan">Persyaratan:</label>
            <input type="text" class="form-control" id="persyaratan" name="persyaratan" value="{{ $jenisijin->persyaratan }}" required>
        </div>
        <div class="form-group">
            <label for="lamaijin">Lama Ijin:</label>
            <input type="text" class="form-control" id="lamaijin" name="lamaijin" value="{{ $jenisijin->lamaijin }}" required>
        </div>
        <div class="form-group">
            <label for="ketentuan">Ketentuan:</label>
            <input type="text" class="form-control" id="ketentuan" name="ketentuan" value="{{ $jenisijin->ketentuan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
