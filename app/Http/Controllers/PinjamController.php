<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjam;

class PinjamController extends Controller
{
    public function index() 
    {
        $pinjams = Pinjam::all();
        return view('pinjam.index', compact('pinjams'));
    }

    public function create()
    {
        return view('pinjam.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required|string|max:100',
            'nama_buku' => 'required|string|max:100',
            'jumlah_buku' => 'required|integer|min:1',
            'tanggal_pinjam' => 'required|date'
        ]);

        Pinjam::create($request->all());

        return redirect()->route('pinjam.index');
    }

    public function edit(Pinjam $pinjam)
    {
        return view('pinjam.edit', compact('pinjam'));
    }

    public function update(Request $request, Pinjam $pinjam)
    {
        $request->validate([
            'nama_peminjam' => 'required|string|max:100',
            'nama_buku' => 'required|string|max:100',
            'jumlah_buku' => 'required|integer|min:1',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date|after_or_equal:tanggal_pinjam',
            'denda' => 'nullable|integer|min:0'
        ]);

        $pinjam->update($request->all());

        return redirect()->route('pinjam.index');
    }

    public function destroy(Pinjam $pinjam)
    {
        $pinjam->delete();
        return redirect()->route('pinjam.index');
    }
}
