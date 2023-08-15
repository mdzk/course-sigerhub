<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('title') | Siger Innovation Hub </title>
    <link rel="shortcut icon" href="{{ url('') }}/assets/static/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/app.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/iconsax.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/app-dark.css" />
    @stack('styles')
</head>

<body>
    <script src="{{ url('') }}/assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active shadow-lg">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.html"><img src="{{ url('') }}/assets/compiled/png/logo.png"
                                    alt="Logo" srcset="" /></a>
                        </div>
                        <div class="sidebar-toggler x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>

                @php
                    function setActive($url, $class = 'active')
                    {
                        return request()->is($url) ? $class : '';
                    }
                @endphp

                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item {{ setActive('admin') }}">
                            <a href="{{ url('admin') }}" class="sidebar-link">
                                <i class="d-flex icon-home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li
                            class="sidebar-item has-sub {{ setActive('admin/users-verification') }} {{ setActive('admin/users') }}">
                            <a href="#" class="sidebar-link">
                                <i class="d-flex icon-activity"></i>
                                <span>Manajemen Usaha</span>
                            </a>

                            <ul class="submenu">
                                <li class="submenu-item {{ setActive('admin/users-verification') }}">
                                    <a href="{{ url('admin/users-verification') }}" class="submenu-link">Verifikasi
                                        Akun Usaha</a>
                                </li>

                                <li class="submenu-item {{ setActive('admin/users') }}">
                                    <a href="{{ url('admin/users') }}" class="submenu-link">Daftar Akun Usaha</a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="sidebar-item has-sub {{ setActive('admin/course') }} {{ setActive('admin/course/create') }}">
                            <a href="#" class="sidebar-link">
                                <i class="d-flex icon-clipboard-text"></i>
                                <span>Manajemen Kelas</span>
                            </a>

                            <ul class="submenu">
                                <li class="submenu-item {{ setActive('admin/course') }}">
                                    <a href="{{ url('admin/course') }}" class="submenu-link">Daftar Kelas</a>
                                </li>

                                <li class="submenu-item {{ setActive('admin/course/create') }}">
                                    <a href="{{ route('course-create') }}" class="submenu-link">Tambah Kelas</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="d-flex icon-video-circle"></i>
                                <span>Manajemen Video</span>
                            </a>

                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="video-daftar.html" class="submenu-link">Daftar Video</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="video-tambah.html" class="submenu-link">Tambah Video</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item has-sub {{ setActive('admin/categories') }} {{ setActive('admin/categories/create') }}">
                            <a href="#" class="sidebar-link">
                                <i class="d-flex icon-note"></i>
                                <span>Manajemen Ketegori</span>
                            </a>

                            <ul class="submenu">
                                <li class="submenu-item {{ setActive('admin/categories') }}">
                                    <a href="{{ route('categories') }}" class="submenu-link">Daftar Kategori</a>
                                </li>

                                <li class="submenu-item {{ setActive('admin/categories/create') }}">
                                    <a href="{{ route('categories-create') }}" class="submenu-link">Tambah Kategori</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="d-flex icon-calendar-2"></i>
                                <span>Manajemen Event</span>
                            </a>

                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="event-daftar.html" class="submenu-link">Daftar Event</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="event-tambah.html" class="submenu-link">Tambah Event</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a href="pengaturan.html" class="sidebar-link">
                                <i class="d-flex icon-setting-2"></i>
                                <span>Pengaturan</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="d-flex icon-logout"></i> <span>Log Out</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            @yield('content')

        </div>
    </div>
    <script src="{{ url('') }}/assets/static/js/components/dark.js"></script>
    <script src="{{ url('') }}/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ url('') }}/assets/compiled/js/app.js"></script>
    @stack('scripts')
</body>

</html>
