<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siger Innovation Hub</title>
    <link rel="stylesheet" href="./assets/compiled/css/app.css" />
  <link rel="stylesheet" href="./assets/compiled/css/iconsax.css" />
  <link rel="stylesheet" href="./assets/compiled/css/app-dark.css" />
  <link rel="stylesheet" href="./assets/compiled/css/iconly.css" />
    <link rel="shortcut icon" href="assets/static/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/static/images/logo/favicon.png" type="image/png">
    @stack('styles')
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        <header class="mb-5">
            <nav class="navbar navbar-expand-lg bg-white">
                <div class="container">
                    <!-- Logo Brand -->
                    <a class="navbar-brand" href="#">
                        <img src="assets/static/images/logo/logo.png" alt="Logo Brand" height="50">
                    </a>

                    <!-- Toggler untuk responsive navbar -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <!-- Daftar Menu -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kelas inkubasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Event</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kontak</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Tombol Action (dengan kelas d-lg-none untuk responsif) -->
                    <div class="d-flex d-none d-md-none d-lg-block">
                        <button class="btn btn-lg btn-primary p-3">Daftar Sekarang, Gratis !</button>
                    </div>
                </div>
            </nav>

        </header>
        
        @yield('content')

        <footer>
            <div class="container clearfix my-5 py-5">
                <div class="row">
                    <div class="col-md-4 pe-5">
                        <img src="assets/static/images/logo/logo.png" alt="Logo Brand" height="50">
                        <h5 class="mt-4">Menjadi inkubator bisnis berbasis koperasi pertama di indonesia</h5>
                        <hr>
                        <p class="text-primary fw-bold mb-2">Email : sigerhub@gmail.com</p>
                        <span class="text-muted fs-7">&copy; Sigerhub - All Right Reserved 2023</span>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4 pe-5">
                                <h5>Navigation</h5>
                                <hr>
                                <ul class="list-unstyled d-flex flex-column">
                                    <li class="py-1"><a class="text-muted" href="#">Kelas Inkubasi</a></li>
                                    <li class="py-1"><a class="text-muted" href="#">Event</a></li>
                                    <li class="py-1"><a class="text-muted" href="#">Tentang Kami</a></li>
                                    <li class="py-1"><a class="text-muted" href="#">Kontak</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 pe-5">
                                <h5>Social Media</h5>
                                <hr>
                                <ul class="list-unstyled d-flex flex-column">
                                    <li class="py-1"><a class="text-muted" href="#">Instagram</a></li>
                                    <li class="py-1"><a class="text-muted" href="#">Facebook</a></li>
                                    <li class="py-1"><a class="text-muted" href="#">LinkedIn</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h5>Get In Touch</h5>
                                <hr>
                                <ul class="list-unstyled d-flex flex-column">
                                    <li class="py-1"><i class="icon-calendar-2 text-primary me-2"></i> Senin - Jumat / 10.00 -
                                        17.00
                                    </li>
                                    <li class="py-1"><i class="icon-call text-primary me-2"></i> +62 822 7857 4388</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/compiled/js/app.js"></script>

    @stack('scripts')
</body>

</html>