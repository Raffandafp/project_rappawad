@extends('layouts.app')
@section('content')
    {{-- Button Tambah Mahasiswa --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary d-flex gap-2">
            <div class=""><span class="material-symbols-rounded fs-6">add</span></div> Tambah Mahasiswa
        </a>
    </div>

    {{-- Success Alert --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

        </div>
    </div>
@endsection
