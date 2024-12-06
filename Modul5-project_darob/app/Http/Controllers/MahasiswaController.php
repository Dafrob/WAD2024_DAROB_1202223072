<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all(); // Ambil semua data mahasiswa
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dosens = Dosen::all();
        return view('mahasiswa.create', compact('dosens')); // Tidak perlu mem-passing variabel $mahasiswa
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswas,nim',
            'nama_mahasiswa' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:mahasiswas,email',
            'jurusan' => 'required|string|max:50',
            'dosen_id' => 'required|integer|exists:dosens,id',
        ]);
        
        Mahasiswa::create($request->all()); // Simpan data ke database

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa')); // Tampilkan detail mahasiswa
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa')); // Tampilkan form edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama_mahasiswa' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:mahasiswas,email,' . $mahasiswa->id,
            'jurusan' => 'required|string|max:50',
            'dosen_id' => 'required|integer|exists:dosens,id',
        ]);
        
        $mahasiswa->update($request->only(['nim', 'nama_mahasiswa', 'email', 'jurusan', 'dosen_id'])); // Update data mahasiswa

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete(); // Hapus data mahasiswa

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}