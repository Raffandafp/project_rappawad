<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Http\Requests\StoreDosenRequest;
use App\Http\Requests\UpdateDosenRequest;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::all();
        $nav = 'Daftar Dosen';

        return view('dosen.index', compact('dosens', 'nav'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nav = 'Tambah Dosen';
        return view('dosen.create', compact('nav'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDosenRequest $request)
    {
        // Data sudah tervalidasi otomatis melalui StoreDosenRequest
        Dosen::create($request->validated());

        return redirect()->route('dosen.index')->with('success', 'Data Dosen Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        $nav = 'Detail Informasi Dosen - ' . $dosen->nama_dosen;
        return view('dosen.show', compact('dosen', 'nav'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        $nav = 'Edit Dosen - ' . $dosen->nama_dosen;
        return view('dosen.edit', compact('dosen', 'nav'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDosenRequest $request, Dosen $dosen)
    {
        // Data sudah tervalidasi otomatis melalui UpdateDosenRequest
        $dosen->update($request->validated());

        return redirect()->route('dosen.index')->with('success', 'Informasi Dosen Berhasil Diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data Dosen Berhasil Dihapus.');
    }
}
