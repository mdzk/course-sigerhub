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
    <style>
        iframe {
            width: 100%;
            height: 25rem;
        }
    </style>
</head>

<body>
    <script src="{{ url('') }}/assets/static/js/initTheme.js"></script>
    <div id="app">

        <div class="row">
            <div class="d-none d-sm-none d-md-block col-md-4 bg-primary p-3">
                <div class="d-flex align-items-center justify-content-center h-100 w-100">
                    <h4 class="m-0 text-white">Daftar Video Pembelajaran</h4>
                </div>
            </div>
            <div class="col-md-8 py-3 bg-secondary d-flex align-items-center justify-content-between px-5">
                /
                <div>
                    <a href="as" class="d-flex align-items-center py-3 px-4">
                        <div class="mb-1">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 22.5C17.5228 22.5 22 18.0228 22 12.5C22 6.97715 17.5228 2.5 12 2.5C6.47715 2.5 2 6.97715 2 12.5C2 18.0228 6.47715 22.5 12 22.5Z"
                                    stroke="#667085" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M15.5 12.5H9.5" stroke="#667085" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M11.5 9.5L8.5 12.5L11.5 15.5" stroke="#667085" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div>
                    <button class="d-flex align-items-center btn btn-primary py-3 px-4">
                        <h4 class="d-none d-sm-none d-md-block m-0 fw-normal text-white me-2">Tandai jika sudah selesai
                        </h4>
                        <div class="mb-1">
                            <svg style="width: 25px; height: 25px;"viewBox="0 0 24 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6.5L9 17.5L4 12.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 order-md-first order-last">
                {{-- daftar video --}}
            </div>
            <div class="col-md-8 p-0">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/siWF-OzDkr4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <script src="{{ url('') }}/assets/static/js/components/dark.js"></script>
    <script src="{{ url('') }}/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ url('') }}/assets/compiled/js/app.js"></script>
</body>

</html>
