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
    </div>

    {{-- Form Create Mahasiswa --}}
    <div class="card">
        <div class="card-body">
            <form action="{{ route('mahasiswa.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM </label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"
                        name="nim" placeholder="Masukkan NIM" value="{{ old('nim') }}">
                    @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                    <textarea class="form-control @error('nama_mahasiswa') is-invalid @enderror" id="nama_mahasiswa" name="nama_mahasiswa"
                        placeholder="Masukkan nama mahasiswa">{{ old('nama_mahasiswa') }}</textarea>
                    @error('nama_mahasiswa')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">EMAIL</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" placeholder="Masukkan email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                        name="jurusan" placeholder="Masukkan jurusan" value="{{ old('jurusan') }}">
                    @error('jurusan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
