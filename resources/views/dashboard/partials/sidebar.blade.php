<header class="navbar navbar-success sticky-top bg-success flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-white" href="#">Pendaftaran Kursus</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dasbor*') ? 'active' : '' }}" aria-current="page"
                            href="/dasbor">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    @if (auth()->user()->role_id == 1)
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dataMahasiswa*') ? 'active' : '' }}"
                                href="/dataMahasiswa">
                                <span data-feather="file"></span>
                                Data Mahasiswa
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link {{ Request::is('dataPangajuan*') ? 'active' : '' }}"
                                href="/dataPangajuan">
                                <span data-feather="file"></span>
                                Data pengajuan
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dataKursus*') ? 'active' : '' }}" href="/dataKursus">
                                <span data-feather="file"></span>
                                Data Kursus
                            </a>
                        </li>
                    @endif
                    @if (auth()->user()->role_id == 0)
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('pengajuan*') ? 'active' : '' }}" href="/pengajuan">
                                <span data-feather="file"></span>
                                Data Kursus
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">
                            <span data-feather="file"></span>
                            logout
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
        @yield('content')
    </div>
</div>
