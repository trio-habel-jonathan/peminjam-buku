{{-- resources/views/pinjam/create.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Tambah Peminjam buku</h1>
    <form action="{{  route('pinjam.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_peminjam">Nama Peminjam</label>
            <input type="text" name="nama_peminjam" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama_buku">Nama Buku</label>
            <input type="text" name="nama_buku" class="form-control"  required>
        </div>
        <div class="form-group">
            <label for="jumlah_buku">Jumlah Buku</label>
            <input type="number" name="jumlah_buku" class="form-control" required min="1">
        </div>
        <div class="form-group">
            <label for="tanggal_pinjam">Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" class="form-control"  required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
