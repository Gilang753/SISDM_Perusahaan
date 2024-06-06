@extends('dashboard')

@section('content')
<div class="container">
    <h1>Tambah Gaji</h1>
    <form action="{{ route('gaji.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_pegawai">ID Pegawai:</label>
            <input type="text" class="form-control" id="id_pegawai" name="id_pegawai" required>
        </div>
        <div class="form-group">
            <label for="id_tunjangan">ID Tunjangan:</label>
            <input type="text" class="form-control" id="id_tunjangan" name="id_tunjangan" required>
        </div>
        <div class="form-group">
            <label for="tanggal_gaji">Tanggal Gaji:</label>
            <input type="date" class="form-control" id="tanggal_gaji" name="tanggal_gaji" required>
        </div>
        <div class="form-group">
            <label for="gaji_pokok">Gaji Pokok:</label>
            <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" required>
        </div>
        <div class="form-group">
            <label for="gaji_lembur">Gaji Lembur:</label>
            <input type="text" class="form-control" id="gaji_lembur" name="gaji_lembur" required>
        </div>
        <div class="form-group">
            <label for="gaji_total">Gaji Total:</label>
            <input type="text" class="form-control" id="gaji_total" name="gaji_total" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
