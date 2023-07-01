<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link
      rel="shortcut icon"
      href="./assets/compiled/svg/favicon.svg"
      type="image/x-icon"
    />

    <link
      rel="shortcut icon"
      href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC"
      type="image/png"
    />

    <link rel="stylesheet" href="./assets/compiled/css/app.css" />
    <link rel="stylesheet" href="./assets/compiled/css/iconsax.css" />
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css" />
    @stack('styles')
  </head>

  <body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
      <div id="sidebar">
        <div class="sidebar-wrapper active shadow-lg">
          <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
              <div class="logo">
                <a href="index.html"
                  ><img
                    src="./assets/compiled/png/logo.png"
                    alt="Logo"
                    srcset=""
                /></a>
              </div>
              <div class="sidebar-toggler x">
                <a href="#" class="sidebar-hide d-xl-none d-block"
                  ><i class="bi bi-x bi-middle"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-item active">
                <a href="index.html" class="sidebar-link">
                  <i class="d-flex icon-home"></i>
                  <span>Dashboard</span>
                </a>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="d-flex icon-activity"></i>
                  <span>Manajemen Usaha</span>
                </a>

                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="usaha-verifikasi.html" class="submenu-link"
                      >Verifikasi Akun Usaha</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="usaha-daftar.html" class="submenu-link"
                      >Daftar Akun Usaha</a
                    >
                  </li>
                </ul>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="d-flex icon-clipboard-text"></i>
                  <span>Manajemen Kelas</span>
                </a>

                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="kelas-daftar.html" class="submenu-link"
                      >Daftar Kelas</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="kelas-tambah.html" class="submenu-link"
                      >Tambah Kelas</a
                    >
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
                    <a href="video-daftar.html" class="submenu-link"
                      >Daftar Video</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="video-tambah.html" class="submenu-link"
                      >Tambah Video</a
                    >
                  </li>
                </ul>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="d-flex icon-note"></i>
                  <span>Manajemen Ketegori</span>
                </a>

                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="kategori-daftar.html" class="submenu-link"
                      >Daftar Kategori</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="kategori-tambah.html" class="submenu-link"
                      >Tambah Kategori</a
                    >
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
                    <a href="event-daftar.html" class="submenu-link"
                      >Daftar Event</a
                    >
                  </li>

                  <li class="submenu-item">
                    <a href="event-tambah.html" class="submenu-link"
                      >Tambah Event</a
                    >
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
                <a
                  href="https://github.com/zuramai/mazer#donation"
                  class="sidebar-link"
                >
                  <i class="d-flex icon-logout"></i>
                  <span>Log Out</span>
                </a>
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
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/compiled/js/app.js"></script>
    @stack('scripts')
  </body>
</html>
