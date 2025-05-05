<!-- Head and Header -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="">
    <meta name="author" content="new.amudarya.uz">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('assets/css/volt.css') }}" rel="stylesheet">
    <!-- FontAwesone  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="index.html">

        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div
                class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="avatar-lg me-4">
                        <img src="assets/img/team/profile-picture-3.jpg"
                            class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                    </div>
                    <div class="d-block">
                        <h2 class="h5 mb-3">Hi, Jane</h2>
                        <a href="sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                            Chiqish
                        </a>
                    </div>
                </div>
                <div class="collapse-close d-md-none">
                    <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                        aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">

                        </span>
                        <span class="mt-1 ms-1 sidebar-text">new.amudarya.uz</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <i class="fa-solid fa-house"></i>
                        </span>
                        <span class="sidebar-text">Bosh sahifa</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('profile') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <i class="fa-solid fa-user"></i>
                            <span class="sidebar-text" style="margin-left: 9px; color: #fff">Profil</span>
                        </span>
                    </a>
                </li>


                <li class="nav-item">
                    <span class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#submenu-app">
                        <span>
                            <span class="sidebar-icon">
                                <i class="fa-solid fa-table"></i>
                            </span>
                            <span class="sidebar-text">Jadvallar</span>
                        </span>
                        <span class="link-arrow">
                            <i class="fa-solid fa-angle-right"></i>
                        </span>
                    </span>
                    <div class="multi-level collapse " role="list" id="submenu-app" aria-expanded="false">
                        <ul class="flex-column nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('apparat.index') }}">
                                    <span class="sidebar-text">Apparat</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('polls.index') }}">
                                    <span class="sidebar-text">So'rovnoma</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('newss.index') }}">
                                    <span class="sidebar-text">Yangiliklar</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('types.index') }}">
                                    <span class="sidebar-text">Tadbirlar turlari</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('event.index') }}">
                                    <span class="sidebar-text">Tadbirlari</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('reception.index') }}">
                                    <span class="sidebar-text">Sayyor qabul</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('vacancy.index') }}">
                                    <span class="sidebar-text">Vakansiya fayllari <br> joylashuvi</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('question.index') }}">
                                    <span class="sidebar-text">Ko'p beriladigan <br> savollarga javoblar</span>
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('companytype.index') }}">
                                    <span class="sidebar-text">Tuman tashkilot turlari</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('company.index') }}">
                                    <span class="sidebar-text">Tuman tashkilotlari</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('govguide.index') }}">
                                    <span class="sidebar-text">Hokimlik yo'riqnomasi</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('mfy.index')}}">
                                    <span class="sidebar-text">Mahalla fuqarolar yig'inlari</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('mfysector.index') }}">
                                    <span class="sidebar-text">MFY Sektorlari</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('schedule.index') }}">
                                    <span class="sidebar-text">Qabul jadvali</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('map.index') }}">
                                    <span class="sidebar-text">Xarita</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link"  href="{{route('emails')}}">
                                    <span class="sidebar-text">Elektron pochtalar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <span class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse" data-bs-target="#submenu-pages">
                        <span>
                            <span class="sidebar-icon">
                                <i class="fa-solid fa-file-lines"></i>
                            </span>
                            <span class="sidebar-text">Sahifalar</span>
                        </span>
                        <span class="link-arrow">
                            <i class="fa-solid fa-angle-right"></i>
                        </span>
                    </span>
                    <div class="multi-level collapse " role="list" id="submenu-pages" aria-expanded="false">
                        <ul class="flex-column nav">
                            <li class="nav-item">
                                <a class="nav-link" href="sign-in.html">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    <span class="sidebar-text">Kirish</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="el-fluid px-0 w-100">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                        <!-- Search form -->
                        <form class="navbar-search form-inline" id="navbar-search-main">
                            <div class="input-group input-group-merge search-bar">
                                <span class="input-group-text" id="topbar-addon">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </span>
                                <input type="text" class="form-control" id="topbarInputIconLeft"
                                    placeholder="Qidirish" aria-label="Search" aria-describedby="topbar-addon">
                            </div>
                        </form>
                        <!-- / Search form -->
                    </div>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark notification-bell unread dropdown-toggle"
                                data-unread-notifications="true" href="#" role="button"
                                data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <i class="fa-solid fa-bell text-black" style="font-size: 20px;"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                                <div class="list-group list-group-flush">
                                    <a href="#"
                                        class="text-center text-primary fw-bold border-bottom border-light py-3">Bildirishnomalar</a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="assets/img/team/profile-picture-1.jpg"
                                                    class="avatar-md rounded">
                                            </div>
                                            <div class="col ps-0 ms-2">
                                                <!-- <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                          </div>
                          <div class="text-end">
                            <small class="text-danger">a few moments ago</small>
                          </div>
                        </div>
                        <p class="font-small mt-1 mb-0">Added you to an event "Project stand-up" tomorrow at 12:30 AM.
                        </p> -->
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                                        <i class="fa-solid fa-eye"></i>
                                        Hammasini ko'rish
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown ms-lg-3">
                            <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="media d-flex align-items-center">
                                    <!-- <img class="avatar rounded-circle" alt="Image placeholder"
                    src="assets/img/team/profile-picture-3.jpg"> -->
                                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                        <span class="mb-0 font-small fw-bold text-gray-900">User</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="fa-solid fa-user"></i>&nbsp;
                                    Mening profilim
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="fa-solid fa-gear"></i>&nbsp;
                                    Sozlama
                                </a>
                                <div role="separator" class="dropdown-divider my-1"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item d-flex align-items-center">
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;
                                        Chiqish
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="bg-white rounded shadow  p-2 mb-4 mt-4">
            <div class="row">
                <div class="col-12 col-md-12 col-xl-12 mb-4 mb-md-0">
                    <p class="mb-0 text-center"> &copy; <span id="old_year"></span> - <span
                            id="current_year"></span> new.amudarya.uz</p>
                </div>
            </div>
        </footer>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Core -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Volt JS -->
    <script src="{{ asset('assets/js/volt.js') }}"></script>

</body>

</html>
