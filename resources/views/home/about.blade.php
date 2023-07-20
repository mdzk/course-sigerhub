@extends('layouts.home')

@section('title', 'Kelas Inkubasi')

@push('styles')
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/custom.css" />
@endpush

@section('content')
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="page-content row about-title">
                <div class="col-md-12 col-sm-12 py-5">
                    <div class="row">
                        <div class="col-12 text-center text-white">
                            <h2 class="text-white">Tentang Kami</h2>
                            <p class="mt-4 fs-5">Inkubator bisnis berbasis koperasi pertama di indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-relative container">
            <div class="img-hero shadow-lg card mb-5 p-4">
                <img class="img-fluid rounded" src="{{ url('assets/static/images/bg/about.png') }}" alt="">
            </div>
        </div>
    </section>

    <section class="about-section my-5 py-5">
        <div class="container">
            <div class="page-content row py-5">
                <div class="col-md-5">
                    <h2>Melangkah Maju Bersama Kami</h2>
                </div>
                <div class="col-md-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non justo nec felis varius laoreet quis
                    nec ipsum. Fusce consectetur placerat congue. Mauris nec aliquam urna, quis mollis orci. Phasellus
                    consectetur tincidunt est, ut venenatis urna interdum in. Sed purus magna, pellentesque at faucibus ut,
                    luctus id magna. Duis ornare, nibh in faucibus finibus, urna libero consequat est, et efficitur neque
                    tortor sit amet felis. Suspendisse laoreet neque massa, eu suscipit mi vehicula scelerisque. Vivamus
                    massa velit, tincidunt at urna sit amet, interdum venenatis turpis. Cras justo libero, pulvinar vitae
                    dolor eget, porttitor viverra lorem. Etiam nibh neque, rutrum consequat ipsum a, porta porttitor metus.
                    Praesent diam elit, dictum vitae cursus et, dictum quis odio. Donec eget lorem neque. In ac sapien
                    interdum, pellentesque lacus sit amet, vulputate leo. Cras auctor ex tempus semper vulputate. Nulla
                    justo mi, pharetra et ligula ut, congue tincidunt neque.
<br><br>
                    Nunc placerat iaculis efficitur. Quisque felis diam, pellentesque eget libero quis, pharetra cursus
                    erat. In dictum, nulla sit amet lobortis facilisis, quam neque ullamcorper urna, non consectetur magna
                    nulla vel tortor. Integer faucibus tortor sit amet mattis venenatis. Donec consequat libero arcu, nec
                    congue velit pretium eu. Vestibulum semper orci vel dolor scelerisque, a semper ante ullamcorper. Fusce
                    lacinia congue ligula, eu scelerisque velit sagittis maximus. Nam eget dui nec enim facilisis egestas et
                    id tellus. Quisque in rutrum mi, et suscipit neque. Aenean eleifend egestas erat, sit amet vestibulum
                    nunc vulputate sed. Phasellus quis nulla dui.
                </div>
            </div>
        </div>
    </section>
@endsection
