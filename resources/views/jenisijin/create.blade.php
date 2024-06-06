@extends('dashboard')

@section('content')
<div class="container">
    <h1>Tambah Jenis Ijin</h1>
    <form action="{{ route('jenisijin.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="persyaratan">Persyaratan:</label>
            <input type="text" class="form-control" id="persyaratan" name="persyaratan" required>
        </div>
        <div class="form-group">
            <label for="lamaijin">Lama Ijin:</label>
            <input type="text" class="form-control" id="lamaijin" name="lamaijin" required>
        </div>
        <div class="form-group">
            <label for="ketentuan">Ketentuan:</label>
            <input type="text" class="form-control" id="ketentuan" name="ketentuan" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
