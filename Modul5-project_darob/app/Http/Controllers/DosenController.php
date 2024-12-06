<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosenn = Dosen::all(); // Variabel konsisten untuk data dosen
        $title = 'Data Dosen'; // Gunakan $title untuk judul halaman

        return view('dosen.index', compact('dosenn', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Dosen'; // Gunakan $title untuk judul halaman
        return view('dosen.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kode_dosen' => 'required|string|max:100|unique:dosens,kode_dosen',
            'nama_dosen' => 'required|string|max:255',
            'nip' => 'required|string|max:50|unique:dosens,nip',
            'email' => 'required|email|max:255|unique:dosens,email',
            'no_telepon' => 'required|string|max:15',
        ]);
        
        Dosen::create($validateData);

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        $title = 'Detail Dosen - ' . $dosen->kode_dosen;
        return view('dosen.show', compact('dosen', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        $title = 'Edit Dosen - ' . $dosen->kode_dosen;
        return view('dosen.edit', compact('dosen', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        $validatedData = $request->validate([
            'kode_dosen' => 'required|string|max:100|unique:dosens,kode_dosen,'.$dosen->id,
            'nama_dosen' => 'required|string|max:255',
            'nip' => 'required|string|max:50|unique:dosens,nip,'.$dosen->id,
            'email' => 'required|email|max:255|unique:dosens,email,'.$dosen->id,
            'no_telepon' => 'required|string|max:15',
        ]);
        

        $dosen->update($validatedData);

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil dihapus.');
    }
}