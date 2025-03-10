<nav class="">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-3 text-white min-vh-100">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-3 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline fw-bold">Daftar Dosen dan Mahasiswa Panel</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <!-- Dashboard -->
            <li class="nav-item mb-5 @if (Route::is('dashboard')) fw-bold @endif">
                <a href="/dashboard" class="nav-link px-0 align-middle text-white d-flex">
                    <div>
                        <span class="material-symbols-rounded">dashboard</span>
                    </div>
                    <div class="ms-3 d-none d-sm-inline fs-5">
                        <span>Dashboard</span>
                    </div>
                    @if (Route::is('dashboard'))
                        <div class="ms-3">
                            <span class="material-symbols-rounded fs-6 text-warning shadow">circle</span>
                        </div>
                    @endif
                </a>
            </li>
            <!-- Daftar Dosen -->
            <li class="nav-item mb-3 @if (Route::is('dosen.index')) fw-bold @endif">
                <a href="{{ route('dosen.index') }}" class="nav-link px-0 align-middle text-white d-flex">
                    <div>
                        <span class="material-symbols-rounded">group</span>
                    </div>
                    <div class="ms-3 d-none d-sm-inline">
                        <span>Daftar Dosen</span>
                    </div>
                </a>
            </li>
            <!-- Tambah Dosen -->
            <li class="nav-item mb-3 @if (Route::is('dosen.create')) fw-bold @endif">
                <a href="{{ route('dosen.create') }}" class="nav-link px-0 align-middle text-white d-flex">
                    <div>
                        <span class="material-symbols-rounded">person_add</span>
                    </div>
                    <div class="ms-3 d-none d-sm-inline">
                        <span>Tambah Dosen</span>
                    </div>
                </a>
            </li>
            <!-- Daftar Mahasiswa -->
            <li class="nav-item mb-3 @if (Route::is('mahasiswa.index')) fw-bold @endif">
                <a href="{{ route('mahasiswa.index') }}" class="nav-link px-0 align-middle text-white d-flex">
                    <div>
                        <span class="material-symbols-rounded">school</span>
                    </div>
                    <div class="ms-3 d-none d-sm-inline">
                        <span>Daftar Mahasiswa</span>
                    </div>
                </a>
            </li>
            <!-- Tambah Mahasiswa -->
            <li class="nav-item mb-3 @if (Route::is('mahasiswa.create')) fw-bold @endif">
                <a href="{{ route('mahasiswa.create') }}" class="nav-link px-0 align-middle text-white d-flex">
                    <div>
                        <span class="material-symbols-rounded">add_circle</span>
                    </div>
                    <div class="ms-3 d-none d-sm-inline">
                        <span>Tambah Mahasiswa</span>
                    </div>
                </a>
            </li>
        </ul>
        <hr>
        @if (Auth::check())
            <div class="dropdown pb-4">
                <a href="#"
                    class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('storage/placeholder/no-avatar.png') }}" alt="Avatar" width="30"
                        height="30" class="rounded-circle">
                    <span class="d-none d-sm-inline mx-1 ms-3">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="/shop">Sporta Cashier</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</nav>
