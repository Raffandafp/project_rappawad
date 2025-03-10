@extends('layouts.app')

@section('content')
    {{-- Back Button --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-primary d-flex gap-2">
            <div class="">
                <span class="material-symbols-rounded fs-6">
                    mahasiswa
                </span>
            </div> Daftar Mahasiswa
        </a>
        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-outline-primary">Edit</a>
        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="post" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger">Hapus</button>
        </form>
    </div>

    {{-- Show Mahasiswa --}}
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
            <label for="nim" class="form-label">NIM </label>
                <input type="text" class="form-control" id="nim" name="nim" value="{{ $mahasiswa->nim }}"
                    disabled>
            </div>
            <div class="mb-3">
            <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                <textarea class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" disabled>{{ $mahasiswa->nama_mahasiswa }}</textarea>
            </div>
            <div class="mb-3">
                    <label for="email" class="form-label">EMAIL</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $mahasiswa->email }}"
                    disabled>
            </div>
            <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $mahasiswa->jurusan }}"
                    disabled>
            </div>
        </div>
    </div>
@endsection
