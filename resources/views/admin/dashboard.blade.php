<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/tabler.min.css') }}">
</head>
<body>
    <div class="page">
        <!-- Sidebar -->
        {{-- @include('components.sidebar') --}}
        <aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
                    aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-brand navbar-brand-autodark">
                    <a href="#">
                        <img src="#" alt="" width="150">
                    </a>
                </div>
                <div class="navbar-nav flex-row d-lg-none">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                            aria-label="Open user menu">
                            <span class="avatar avatar-sm" style="background-image: url(#)"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="#" class="dropdown-item">Profile</a>
                            <div class="dropdown-divider"></div>
                            <form action="#" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="sidebar-menu">
                    <ul class="navbar-nav pt-2">
        
                        <li class="nav-item #">
                            <a class="nav-link" href="#">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-dashboard">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path d="M13.45 11.55l2.05 -2.05" />
                                        <path d="M6.4 20a9 9 0 1 1 11.2 0z" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Dashboard
                                </span>
                            </a>
                        </li>
        
                        <li
                            class="nav-item dropdown #">
                            <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                                data-bs-auto-close="false" role="button" aria-expanded="false">
                                <span class="nav-link-icon ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-database">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 6m-8 0a8 3 0 1 0 16 0a8 3 0 1 0 -16 0" />
                                        <path d="M4 6v6a8 3 0 0 0 16 0v-6" />
                                        <path d="M4 12v6a8 3 0 0 0 16 0v-6" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Master
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        <a class="dropdown-item #"
                                            href="#">
                                            Data User
                                        </a>
                                        <a class="dropdown-item #"
                                            href="#">
                                            Data Siswa
                                        </a>
                                        <a class="dropdown-item #"
                                            href="#">
                                            Data Alasan
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="nav-link-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-file-analytics">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                        <path d="M9 17l0 -5" />
                                        <path d="M12 17l0 -1" />
                                        <path d="M15 17l0 -3" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Cetak Laporan
                                </span>
                            </a>
                        </li>
        
                        <hr class="m-3">
        
                        <li class="nav-item d-none d-lg-block">
                            <form action="#" method="post">
                                @csrf
                                <button type="submit" class="nav-link">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-logout-2">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                                            <path d="M15 12h-12l3 -3" />
                                            <path d="M6 15l-3 -3" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Logout
                                    </span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

        

        <div class="page-wrapper">
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                dashboard
                            </div>
                            <h2 class="page-title">
                                Dashboard
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ms-auto d-print-none">
                            <div class="btn-list">
                                <span class="d-inline">
                                    <a href="{{ url()->previous() }}" class="btn">Kembali</a>
                                </span>
        
                                <a href="#"
                                    class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="icon">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M12 5l0 14" />
                                        <path d="M5 12l14 0" />
                                    </svg>
                                    Lorem, ipsum.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-body">
                {{-- card information --}}
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        <div class="col-12">
                            <div class="row row-cards">
                                <div class="col-sm-6 col-lg-4">
                                    <div class="alert alert-primary p-4">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="bg-primary text-white avatar">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="currentColor"
                                                        class="icon icon-tabler icons-tabler-filled icon-tabler-woman">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M14 8c1.91 0 3.79 .752 5.625 2.219a1 1 0 1 1 -1.25 1.562c-1.019 -.815 -2.016 -1.345 -2.997 -1.6l1.584 5.544a1 1 0 0 1 -.962 1.275h-1v4a1 1 0 0 1 -2 0v-4h-2v4a1 1 0 0 1 -2 0v-4h-1a1 1 0 0 1 -.962 -1.275l1.584 -5.545c-.98 .256 -1.978 .786 -2.997 1.601a1 1 0 1 1 -1.25 -1.562c1.733 -1.386 3.506 -2.133 5.307 -2.212l.335 -.007z" />
                                                        <path d="M12 1a3 3 0 1 1 -3 3l.005 -.176a3 3 0 0 1 2.995 -2.824" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium fw-bold">
                                                    Jumlah Siswa
                                                </div>
                                                <div class="text-secondary">
                                                   111
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="alert alert-success p-4">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="bg-green text-white avatar">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="currentColor"
                                                        class="icon icon-tabler icons-tabler-filled icon-tabler-man">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M15 8c1.628 0 3.2 .787 4.707 2.293a1 1 0 0 1 -1.414 1.414c-.848 -.848 -1.662 -1.369 -2.444 -1.587l-.849 5.944v4.936a1 1 0 0 1 -2 0v-4h-2v4a1 1 0 0 1 -2 0v-4.929l-.85 -5.951c-.781 .218 -1.595 .739 -2.443 1.587a1 1 0 1 1 -1.414 -1.414c1.506 -1.506 3.08 -2.293 4.707 -2.293z" />
                                                        <path d="M12 1a3 3 0 1 1 -3 3l.005 -.176a3 3 0 0 1 2.995 -2.824" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium fw-bold">
                                                    Jumlah Guru
                                                </div>
                                                <div class="text-secondary">
                                                    111
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="alert alert-danger p-4">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="bg-danger text-white avatar">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="icon icon-tabler icons-tabler-outline icon-tabler-user-off">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path
                                                            d="M8.18 8.189a4.01 4.01 0 0 0 2.616 2.627m3.507 -.545a4 4 0 1 0 -5.59 -5.552" />
                                                        <path
                                                            d="M6 21v-2a4 4 0 0 1 4 -4h4c.412 0 .81 .062 1.183 .178m2.633 2.618c.12 .38 .184 .785 .184 1.204v2" />
                                                        <path d="M3 3l18 18" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="col">
                                                <div class="font-weight-medium fw-bold">
                                                    Total Pelanggar Bulan Ini
                                                </div>
                                                <div class="text-secondary">
                                                    111
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="{{ asset('js/tabler.min.js') }}"></script>
</body>
</html>