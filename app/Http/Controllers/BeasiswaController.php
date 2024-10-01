<?php

namespace App\Http\Controllers;

use App\Models\beasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel 'beasiswa'
        $beasiswa = Beasiswa::all();

        // Mengirim data tersebut ke view 'beasiswa.index'
        return view('index', compact('beasiswa'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_beasiswa' => 'required|string|max:255',
            'jumlah_dana' => 'required|numeric',
            'kategori' => 'required|string',
            'tanggal_mulai' => 'required|date',
            'aktif' => 'boolean',
        ]);

        $validatedData['aktif'] = $request->has('aktif') ? 1: 0;

        $beasiswa = Beasiswa::create($request->all());
        if ($beasiswa) {
            return redirect()->route('beasiswa')->with('success', 'Beasiswa berhasil ditambahkan!');
        }
    }
}
