<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        $nav = 'Daftar Mahasiswa';

        return view('mahasiswa.index', compact('mahasiswas', 'nav'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nav = 'Tambah Mahasiswa';
        return view('mahasiswa.create', compact('nav'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMahasiswaRequest $request)
    {
        $validateData = $request->validate([
            'nim' => 'required|string|max:255|unique:mahasiswas',
            'nama_mahasiswa' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswas',
            'jurusan' => 'required|string|max:255',
            'dosen_id' => 'required|exists:dosens,id',
        ]);
        Mahasiswa::create($validatedData);
        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        $nav = 'Detail Informasi Mahasiswa - ' . $mahasiswa->nama_mahasiswa;
        return view('mahasiswa.show', compact('mahasiswa', 'nav'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $nav = 'Edit Mahasiswa - ' . $mahasiswa->nama_mahasiswa;
        return view('mahasiswa.edit', compact('mahasiswa', 'nav'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $validatedData = $request->validate([
            'nim' => 'required|string|max:255|unique:mahasiswas',
            'nama_mahasiswa' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswas',
            'jurusan' => 'required|string|max:255',
            'dosen_id' => 'required|exists:dosens,id',
        ]);
        $mahasiswa->update(validatedData);
        return redirect()->route('mahasiswa.index')->wth('success', 'Informasi Mahasiswa Berhasil Diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa Berhasil Dihapus.');
    }
}
