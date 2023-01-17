@extends('frontend.layouts.app')

@section('page-title'){{__("Transparansi")}} - Autopedia @endsection

@section('content')
<div class="transparansi">
    <section class="banner-jumbo bg-white">
        <div class="container">
            <img class="d-none d-md-flex img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-three-banner-desktop.webp') }}" alt="banner">
            <img class="d-flex d-md-none img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-three-banner-mobile.webp') }}" alt="banner">
            <div class="box-title">
                <h1 class="text-head common-bold" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="200">
                    {{__("Transparansi")}}
                </h1>
                <div class="subhead" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="400">
                    {{__("Dalam menjalankan kegiatan usaha, Autopedia mengedepankan integritas dan kredibilitas serta penuh tanggung jawab.")}}
                </div>
            </div>
        </div>
    </section>

    <section class="section-one">
        <div class="container">
            <div class="box-head">
                <div class="subtitle fw-bold" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="200">
                    {{__("Menyediakan informasi yang transparan merupakan dasar kami dalam memberikan pelayanan yang terbaik.")}}
                </div>
            </div>
            <div class="row box-content">
                <div class="col-12 col-md-6">
                    <div class="box-item" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400"
                    data-aos-delay="400">
                        <div class="box-icon">
                            <img src="{{ asset('assets/images/svg/ic-struktur-organisasi.svg') }}"
                                class="img-fluid icon" alt="icon">
                        </div>
                        <div class="box-text">
                            <div class="name fw-bold">
                                {{__("Tata Kelola Perusahaan")}}
                            </div>
                            <div class="desc">
                                {{__("Dalam membangun rumusan tata kelola perusahaan, kami memastikan agar bisnis dapat berjalan selaras dengan kebijakan yang berlaku serta mendukung penuh pertumbuhan Autopedia.")}} 
                            </div>
                        </div>
                        <div class="box-button">
                            <a href="{{URL::to('/transparansi/tata-kelola-perusahaan')}}" target="_self" rel="noopener noreferrer"
                                class="btn btn-detail">
                                {{__("Selengkapnya")}}
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="box-item" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400"
                    data-aos-delay="600">
                        <div class="box-icon">
                            <img src="{{ asset('assets/images/svg/ic-hubungan-investor.svg') }}" class="img-fluid icon" alt="icon">
                        </div>
                        <div class="box-text">
                            <div class="name fw-bold">
                                {{__("Hubungan Investor")}}
                            </div>
                            <div class="desc">
                                {{__("Temukan informasi terbaru dari laporan dan ikhtisar keuangan, hingga berita perkembangan dan kinerja Autopedia.")}}
                            </div>
                        </div>
                        <div class="box-button">
                            <a href="{{URL::to('/transparansi/hubungan-investor')}}" target="_self" rel="noopener noreferrer"
                                class="btn btn-detail">
                                {{__("Selengkapnya")}}
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-wbs">
        <div class="container">
            <div class="box-wbs" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="800">
                <a href="{{URL::to('/transparansi/whistle-blowing-system')}}" target="_self" rel="noopener noreferrer">
                    <img class="img-fluid wbs-desktop" src="{{ asset('assets/images/png/whistleblow-desktop.png') }}" alt="wbs">
                </a>
                <a href="{{URL::to('/transparansi/whistle-blowing-system')}}" target="_self" rel="noopener noreferrer">
                    <img class="img-fluid wbs-mobile" src="{{ asset('assets/images/png/whistleblow-mobile.png') }}" alt="wbs">
                </a>
            </div>
        </div>
    </section>
</div>
@stop