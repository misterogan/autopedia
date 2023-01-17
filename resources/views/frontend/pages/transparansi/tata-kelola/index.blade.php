@extends('frontend.layouts.app')

@section('page-title'){{__("Tata Kelola Perusahaan")}} - Autopedia @endsection

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
                    {{__("Tata Kelola Perusahaan")}}
                </h1>
                <div class="subhead" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="400">
                    {{__("Autopedia terus berkomitmen dan menjaga konsistensi agar dapat menjalankan tata kelola yang baik")}}
                </div>
            </div>
        </div>
    </section>

    <section class="tata-kelola-perusahaan">
        <div class="container">
            <div class="box-head">
                <div class="subtitle fw-bold" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="200">
                    {{__("Dalam menjalankan bisnis, kami senantiasa menjalankan tata kelola yang baik serta menjaga kredibilitas dengan penuh tanggung jawab dan transparan.")}}
                </div>
            </div>
            <div class="row box-content">
                @foreach( \App\Models\Category::whereMenu('tata-kelola-perusahaan')->active()->sequence()->get() as $category)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="box-item" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="400">
                        <div class="box-icon">
                            <img src="{{ asset($category->icon) }}" class="img-fluid icon" alt="icon">
                        </div>
                        <div class="box-text">
                            <div class="name fw-bold">
                                {{ $category->getTranslated('category') }}
                            </div>
                        </div>
                        <div class="box-button">
                            <a href="{{ route('transparansi.category', ['category' => $category->slug]) }}" class="btn btn-detail">
                                {{__("Selengkapnya")}}
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="box-item" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="900">
                        <div class="box-icon">
                            <img src="{{ asset('assets/images/svg/ic-anak-perusahaan.svg') }}" class="img-fluid icon" alt="icon">
                        </div>
                        <div class="box-text">
                            <div class="name fw-bold">
                                {{__("Anak Perusahaan")}}
                            </div>
                        </div>
                        <div class="box-button">
                            <a href="{{URL::to('/transparansi/tata-kelola-perusahaan/anak-perusahaan')}}" class="btn btn-detail">
                                {{__("Selengkapnya")}}
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="box-item" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="900">
                        <div class="box-icon">
                            <img src="{{ asset('assets/images/svg/ic-whistle-blowing.svg') }}" class="img-fluid icon" alt="icon">
                        </div>
                        <div class="box-text">
                            <div class="name fw-bold">
                                {{__("Whistleblowing System")}}
                            </div>
                        </div>
                        <div class="box-button">
                            <a href="{{URL::to('/transparansi/whistle-blowing-system')}}" class="btn btn-detail">
                                {{__("Selengkapnya")}}
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@stop