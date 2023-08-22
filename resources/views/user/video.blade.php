<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> {{ $course->title_course }} | Siger Innovation Hub </title>
    <link rel="shortcut icon" href="{{ url('') }}/assets/static/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/app.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/iconsax.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/app-dark.css" />
    <style>
        iframe {
            width: 100%;
            height: 34rem;
        }
    </style>
</head>

<body>
    <script src="{{ url('') }}/assets/static/js/initTheme.js"></script>
    <div id="app">

        <div class="row g-0">
            <div class="d-none d-sm-none d-md-block col-md-3 bg-primary p-3">
                <div class="ps-3 d-flex align-items-center h-100 w-100">
                    <h5 class="m-0 text-white">Daftar Video Pembelajaran</h5>
                </div>
            </div>
            <div class="col-md-9 p-4 bg-secondary d-flex align-items-center justify-content-between">
                <a href="{{ url('class/' . $class) }}" class="d-flex align-items-center">
                    <svg class="me-1" style="width: 25px; height: 25px;" width="24" height="25"
                        viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 22.5C17.5228 22.5 22 18.0228 22 12.5C22 6.97715 17.5228 2.5 12 2.5C6.47715 2.5 2 6.97715 2 12.5C2 18.0228 6.47715 22.5 12 22.5Z"
                            stroke="#667085" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.5 12.5H9.5" stroke="#667085" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M11.5 9.5L8.5 12.5L11.5 15.5" stroke="#667085" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h4 class="fs-6 d-none d-sm-none d-md-block m-0 fw-normal text-muted me-2">Kembali
                    </h4>
                </a>
                <div class="d-flex align-items-center pe-2">
                    <span class="d-flex me-2 fs-6">
                        <div class="d-none d-sm-none d-md-block me-1">
                            Perkembangan Belajar Anda:
                        </div>{{ $video_user_total }} dari {{ $video_total }} Video
                    </span>
                    @empty($video_user_check)
                        <button onclick="event.preventDefault(); document.getElementById('check-form').submit();"
                            class="d-flex align-items-center btn-primary btn">
                            <h4 class="fs-6 d-none d-sm-none d-md-block m-0 fw-normal text-white me-2">Tandai selesai
                            </h4>
                            <div class="">
                                <svg style="width: 25px; height: 25px;"viewBox="0 0 24 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 6.5L9 17.5L4 12.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </button>
                        <form id="check-form" action="{{ route('video-check', $video_slug) }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                    @endempty

                    @if (!empty($video_user_check))
                        <button disabled class="d-flex align-items-center btn-primary btn">
                            <h4 class="fs-6 d-none d-sm-none d-md-block m-0 fw-normal text-white me-2">Ditandai selesai
                            </h4>
                            <div class="">
                                <svg style="width: 25px; height: 25px;" viewBox="0 0 24 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 6.5L9 17.5L4 12.5" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </button>
                    @endif


                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-md-3 order-md-first order-last pe-0">
                <div class="p-2">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($videos as $video)
                        <a href="{{ url('class/' . $class . '/access/' . $video->slug) }}"
                            class="d-flex align-items-center fs-6 p-3 mb-2 btn
                            {{-- @if (!empty($video_user)) @if ($video_user[$i]->id == $video->id) btn-success @endif @endif --}}
                            @if ($video_playing->slug == $video->slug) btn-secondary @endif @if ($video_playing->slug !== $video->slug) btn-white @endif">
                            <i class="fs-4 d-flex icon-video-circle h-auto w-auto me-1"></i>
                            <span>#{{ $i++ }}-{{ $video->title_videos }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9 p-0">
                {!! $video_playing->iframe !!}
            </div>
        </div>
    </div>
    <script src="{{ url('') }}/assets/static/js/components/dark.js"></script>
    <script src="{{ url('') }}/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ url('') }}/assets/compiled/js/app.js"></script>
</body>

</html>
