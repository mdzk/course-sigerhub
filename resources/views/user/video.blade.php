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
                <div class="px-4 row g-0 d-none d-sm-none d-md-block">
                    <div class="col-md-12 d-flex justify-content-between">
                        <div class="d-flex align-items-center btn-warning btn">
                            <h4 class="fs-6 d-none d-sm-none d-md-block m-0 fw-normal text-white me-2">
                                {{ $course->name_category }}
                            </h4>
                        </div>
                        <div class="d-flex">
                            @if ($previous_video !== null)
                                <a href="{{ url('class/' . $class . '/access/' . $previous_video->slug) }}"
                                    class="d-flex align-items-center btn-secondary btn">
                                    <div class="">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                stroke="#667085" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M15.5 12H9.5" stroke="#667085" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.5 9L8.5 12L11.5 15" stroke="#667085" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <h4 class="fs-6 d-none d-sm-none d-md-block m-0 fw-normal text-muted ms-2">
                                        Sebelumnya
                                    </h4>
                                </a>
                            @endif

                            @if ($next_video !== null)
                                <a href="{{ url('class/' . $class . '/access/' . $next_video->slug) }}"
                                    class="d-flex align-items-center btn-success btn ms-2">
                                    <h4 class="fs-6 d-none d-sm-none d-md-block m-0 fw-normal text-white me-2">
                                        Selanjutnya
                                    </h4>
                                    <div class="">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M8.5 12H14.5" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12.5 15L15.5 12L12.5 9" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h4 class="mt-5">Forum Diskusi</h4>
                        <form action="{{ route('comment', $video_playing->id) }}" method="POST">
                            @csrf
                            <textarea class="p-4 form-control form-control-xl @error('content') is-invalid @enderror"
                                placeholder="Tulis Komentar..." name="content" id="" cols="30" rows="5"></textarea>
                            @error('content')
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="d-flex justify-content-end">
                                <button class="btn btn-info mt-3" name="submit" type="submit">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12 15.5V9.5" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9 11.5L12 8.5L15 11.5" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>Unggah Komentar</span>
                                </button>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-12 mt-5 mb-5">
                        @foreach ($comments as $comment)
                            <div class="border border-1 rounded p-4 mb-3">
                                <div class="row g-0">
                                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="avatar avatar-xl border border-4 border-primary">
                                                <img style="object-fit: cover;cursor: pointer;"
                                                    src="@if ($comment->image == 'default.png') {{ url('assets/static/images/faces/1.jpg') }} @else {{ asset('storage/profile/' . $comment->image) }} @endif"
                                                    alt="Face 1">
                                            </div>
                                            <span class="fw-bold fs-5 ms-3 text-black">{{ $comment->name }}</span>
                                        </div>
                                        <div class="d-flex">
                                            <span class="d-flex"><i
                                                    class="me-2 pt-1 icon-calendar-2 text-warning"></i>
                                                {{ date('d M Y', strtotime($comment->created_at)) }}
                                            </span>
                                            <span class="ms-4 d-flex"><i
                                                    class="me-2 pt-1 icon-clock text-warning"></i>
                                                {{ date('H.i', strtotime($comment->created_at)) }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        {{ $comment->content }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('') }}/assets/static/js/components/dark.js"></script>
    <script src="{{ url('') }}/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ url('') }}/assets/compiled/js/app.js"></script>
</body>

</html>
