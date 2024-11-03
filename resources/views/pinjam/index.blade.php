@extends('layouts.app')

@section('content')
    <h1>Daftar Peminjaman Buku</h1>
    <a href="{{ route('pinjam.create') }}">Tambah Peminjaman</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Nama Buku</th>
                <th>Jumlah Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Denda</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pinjams as $pinjam)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pinjam->nama_peminjam }}</td>
                    <td>{{ $pinjam->nama_buku }}</td>
                    <td>{{ $pinjam->jumlah_buku }}</td>
                    <td>{{ $pinjam->tanggal_pinjam }}</td>
                    <td>{{ $pinjam->tanggal_kembali ?? '-'}}</td>
                    <td>{{ $pinjam->denda ? 'Rp' . number_format($pinjam->denda, 0, ',', '.') : '-' }}</td>
                    <td>
                        <a href="{{ route('pinjam.edit', $pinjam->id) }}" class="btn btn-primary    ">Edit</a>
                        <form action="{{ route('pinjam.destroy', $pinjam->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
