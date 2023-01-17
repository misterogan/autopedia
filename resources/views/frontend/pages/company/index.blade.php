@extends('frontend.layouts.app')

@section('page-title'){{__("Tentang Autopedia")}}@endsection

@section('content')
<style>
    .about-company {
        white-space: pre-line;
    }
</style>

<div class="company">
    <section class="banner-jumbo bg-white">
        <div class="container">
            <img class="d-none d-md-flex img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-one-banner-desktop.webp') }}" alt="banner">
            <img class="d-flex d-md-none img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-one-banner-mobile.webp') }}" alt="banner">
            <div class="box-title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                <h1 class="text-head common-bold">
                    {{__("Tentang Autopedia")}}
                </h1>
            </div>
        </div>
    </section>

    <section class="template-company">
        <div class="container">
            <div class="box-content">
                {{-- youtube embed --}}
                <div class="box-video" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="400">
                    <div class="youtube-container">
                        <div class="youtube-player" data-id="{{ @\App\Models\About::first()->youtube_video_id }}"></div>
                    </div>
                </div>

                {{-- About otopedia --}}
                <div class="text-content" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400"
                    data-aos-delay="200">
                    <h2 class="common-bold">{{ $about->getTranslated('title') }}</h2>
                    <p class="about-company">
                        {!! $about->getTranslated('description') !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="template-visi">
        <div class="container">
            <div class="box-visi" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400"
                data-aos-delay="300">
                <div class="box-icon">
                    <img class="img-fluid" src="{{ asset('assets/images/png/icon-visi.png') }}" alt="icon">
                </div>
                <div class="box-text">
                    <div class="title common-bold">
                        {{__("Visi Perusahaan")}}
                    </div>
                    <div class="desc">
                        {{__("Menjadi omnichannel automotive marketplace yang paling terpercaya.")}}
                    </div>
                </div>
            </div>
            <div class="box-misi" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400"
                data-aos-delay="400">
                <div class="box-text">
                    <div class="title common-bold">
                        {{__("Misi Perusahaan")}}
                    </div>
                    <div class="desc">
                        {{__("Mendedikasikan diri dan berkomitmen untuk memberikan layanan terbaik melalui kemampuan dalam penerapan teknologi baru, dukungan finansial dan tim manajemen yang handal.")}}
                    </div>
                </div>
                <div class="box-icon">
                    <img class="img-fluid" src="{{ asset('assets/images/png/icon-misi.png') }}" alt="icon">
                </div>
            </div>

            {{-- <ds --}}
        </div>
    </section>

    <section class="template-manajemen">
        <div class="container">
            <div class="box-head">
                <div class="title-box" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400"
                    data-aos-delay="500">
                    <span class="text common-bold">
                        {{__("Manajemen")}}
                    </span>
                </div>
            </div>
            <div class="box-content">
                <div class="item-box" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400"
                    data-aos-delay="600">
                    <div class="d-flex justify-content-center desktop-menu">
                        <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"
                            data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400">
                            <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#jajaran-direksi"
                                type="button" role="tab" aria-controls="bagan-organisasi" aria-selected="true">
                                {{__("JAJARAN DIREKSI")}}
                            </button>
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#jajaran-komisaris"
                                type="button" role="tab" aria-controls="jajaran-komisaris" aria-selected="false">
                                {{__("JAJARAN KOMISARIS")}}
                            </button>
                        </div>
                    </div>

                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="jajaran-direksi" role="tabpanel"
                            aria-labelledby="jajaran-direksi-tab" tabindex="0">
                            <div class="box-list row">
                                @foreach( $direksi as $item)
                                <div class="box-item col-lg-4 col-sm-5 col-12" data-aos="fade-right"
                                    data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="600">
                                    <a class="text-decoration-none text-black" role="button" data-bs-toggle="modal"
                                        href="#management-{{ $item->id }}">
                                        <div class="box-img shadow-sm">
                                            <img class="icon-img"
                                                src="{{ asset('assets/images/webp/menejemen/ic-management.png') }}"
                                                alt="icon">
                                            <img class="people" src="{{ asset($item->image) }}" alt="management">
                                        </div>
                                        <div class="box-text text-center">
                                            <div class="name common-bold">{{ $item->name }}</div>
                                            <span class="job-position">{{ $item->getTranslated('position') }}</span>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="jajaran-komisaris" role="tabpanel"
                            aria-labelledby="jajaran-komisaris-tab" tabindex="0">
                            <div class="box-list row">
                                @foreach( $komisaris as $item)
                                <div class="box-item col-lg-4 col-sm-5 col-12" data-aos="fade-right"
                                    data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="600">
                                    <a class="text-decoration-none text-black" role="button" data-bs-toggle="modal"
                                        href="#management-{{ $item->id }}">
                                        <div class="box-img shadow-sm">
                                            <img class="icon-img"
                                                src="{{ asset('assets/images/webp/menejemen/ic-management.png') }}"
                                                alt="icon">
                                            <img class="people" src="{{ asset($item->image) }}" alt="management">
                                        </div>
                                        <div class="box-text text-center">
                                            <div class="name common-bold">{{ $item->name }}</div>
                                            <span class="job-position">{{ $item->getTranslated('position') }}</span>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- modal --}}
            @include("frontend.pages.company.modal.modal")
        </div>
    </section>

    <section class="template-milestone">
        <div class="container">
            <div class="box-title" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400"
                data-aos-delay="200">
                <div class="text-head common-bold text-white">
                    {{__("Transformasi Perjalanan Autopedia")}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-12 box-step" data-aos="fade-right" data-aos-easing="linear"
                    data-aos-duration="400" data-aos-delay="400">
                    @include("frontend.pages.company.milestone")
                </div>
                <div class="col-md-10 col-12 box-content" data-aos="fade-right" data-aos-easing="linear"
                    data-aos-duration="400" data-aos-delay="600">
{{--                        <div class="layer_title"></div>--}}
{{--                        <div class="layer_desc"></div>--}}
{{--                        <div class="layer_image"></div>--}}
                    @foreach( $milestone as $milestones)
                    <div class="step step{{ $milestones->id }} hidden">
                        <div class="content">
                            <div class="content-desc">
                                <div class="title-step_desc common-bold">
                                    {{ $milestones->name }}
                                </div>
                                <div class="subtitle_desc">
                                    {!! $milestones->getTranslated('description') !!}
                                </div>
                            </div>
                            <div class="content-img_desc">
                                <img class="img-fluid" src="{{ asset($milestones->image) }}" alt="content">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="template-company">
        <div class="container">
            <div class="box-content">
                {{-- About otopedia --}}
                <div class="text-content">
                    <h2 class="fw-bold text-center common-bold mb-4" data-aos="fade-up" data-aos-easing="linear"
                        data-aos-duration="400" data-aos-delay="200">{{__("Filosofi Brand Autopedia")}}</h2>
                    <h4 class="fw-bold text-center common-bold" data-aos="fade-up" data-aos-easing="linear"
                        data-aos-duration="400" data-aos-delay="300">{{__("Terinspirasi dari simbol “Fast Foward”")}}
                    </h4>
                    <p data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="400">
                        {{__("Logo Autopedia terinspirasi oleh simbol “Fast Forward” atau percepatan, yang menggambarkan Autopedia sebagai perusahaan berbasis teknologi yang mengutamakan kecepatan dalam mengadopsi teknologi yang tepat dan terbaik, visioner terhadap tren bisnis masa depan untuk menjadi Omni Channel marketplace otomotif yang terpercaya.")}}
                    </p>

                    <div class="row gap-3 my-4" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400"
                        data-aos-delay="500">
                        <div class="d-flex justify-content-center box-flex">
                            <div class="box-img">
                                <img class="img-fluid" src="{{ asset('assets/images/webp/menejemen/filosofi1.png') }}"
                                    alt="filosofi1">
                            </div>
                            <div class="box-img">
                                <img class="img-fluid" src="{{ asset('assets/images/webp/menejemen/filosofi2.png') }}"
                                    alt="filosofi2">
                            </div>
                        </div>
                    </div>

                    <p data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="600">
                        {{__("Aspek dinamis pada logo Autopedia yakni di satu sisi logo dapat dibaca sebagai “A”, dan di sisi lain dapat dibaca sebagai “P”, merepresentasikan kemampuan Autopedia untuk beradaptasi terhadap kebutuhan pelanggan yang selalu berubah seiring perkembangan zaman.")}}
                        <br /> <br />
                        {{__("Ide lain yang direpresentasikan logo ini adalah pertumbuhan, gerakan, dan kecepatan.")}}
                        <br /> <br />
                        {{__("Penggunaan warna biru dalam logo melambangkan keandalan, keahlian, dan komitmen Autopedia untuk memberikan pelayanan dengan transparan dan nilai tambah bagi pelanggan.")}}
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    // const dots = document.getElementsByClassName('progress-bar__dot');
    // const stepLine = document.getElementsByClassName('progress-bar');
    // const numberOfSteps = 5;
    // let currentStep = 1;
    //
    // for (let i = 0; i < dots.length; ++i) {
    //     dots[i].addEventListener('click', () => {
    //         goToStep(i + 1)
    //     })
    // }
    //
    // function goToStep(stepNumber) {
    //     currentStep = stepNumber
    //     let inputsToHide = document.getElementsByClassName('step')
    //     let inputs = document.getElementsByClassName(`step${currentStep}`)
    //     let indicators = document.getElementsByClassName('progress-bar__dot')
    //
    //     for (let i = indicators.length - 1; i >= currentStep; --i) {
    //         indicators[i].classList.remove('full')
    //     }
    //
    //     for (let i = 0; i < currentStep; ++i) {
    //         indicators[i].classList.add('full')
    //     }
    //
    //     console.log("Step Click = " + currentStep);
    //
    //     //hide all input
    //     for (let i = 0; i < inputsToHide.length; ++i) {
    //         hide(inputsToHide[i])
    //     }
    //
    //     //only show the right one
    //     for (let i = 0; i < inputs.length; ++i) {
    //         show(inputs[i])
    //     }
    // }
    //
    // function show(elem) {
    //     elem.classList.remove('hidden')
    // }
    //
    // function hide(elem) {
    //     elem.classList.add('hidden')
    // }


    function change_layer(milestone_id,loop,lang){
        // alert(lang);
        var token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            headers: { 'X-CSRF-TOKEN': token },
            type : 'POST',
            data: {
                'milestone_id':milestone_id,
                'lang':lang,
            },
            url  : '/milestone/get/value',
            dataType: 'JSON',
            success: function(data){

                $(".title-step_desc").html(data.data.milestone.name);
                $(".subtitle_desc").html(data.data.description);
                $(".content-img_desc").html('<img class="img-fluid" src="'+data.data.image+'" alt="content">');

            }

        });
        var plus = loop+1;

        for (let i = 1; i < plus; i++) {
            $(".progress-bar__dot_"+i).addClass('full');
        }

    }


</script>
@stop
