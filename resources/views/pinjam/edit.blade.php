@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pinjam</h1>
    <form action="{{ route('pinjam.update', $pinjam->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_peminjam">Nama Peminjam</label>
            <input type="text" name="nama_peminjam" class="form-control" value="{{ $pinjam->nama_peminjam }}" required>
        </div>
        <div class="form-group">
            <label for="nama_buku">Nama Buku</label>
            <input type="text" name="nama_buku" class="form-control" value="{{ $pinjam->nama_buku }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah_buku">Jumlah Buku</label>
            <input type="number" name="jumlah_buku" class="form-control" value="{{ $pinjam->jumlah_buku }}" required min="1">
        </div>
        <div class="form-group">
            <label for="tanggal_pinjam">Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" class="form-control" value="{{ $pinjam->tanggal_pinjam }}" required readonly>
        </div>
        <div class="form-group">
            <label for="tanggal_kembali">Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" class="form-control" value="{{ $pinjam->tanggal_kembali }}" required>
        </div>
        <div class="form-group">
            <label for="denda">Denda</label>
            <input type="number" name="denda" class="form-control" value="{{ $pinjam->denda }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
