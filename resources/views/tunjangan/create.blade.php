@extends('dashboard')

@section('content')
<div class="container">
    <h1>Tambah Tunjangan</h1>
    <form action="{{ route('tunjangan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_tunjangan">Nama Tunjangan:</label>
            <input type="text" class="form-control" id="nama_tunjangan" name="nama_tunjangan" required>
        </div>
        <div class="form-group">
            <label for="besaran_tunjangan">Besaran Tunjangan:</label>
            <input type="text" class="form-control" id="besaran_tunjangan" name="besaran_tunjangan" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
