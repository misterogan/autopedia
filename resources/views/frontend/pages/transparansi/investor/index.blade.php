@extends('frontend.layouts.app')

@section('page-title'){{__("Hubungan Investor")}} - Autopedia @endsection

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
                    {{__("Hubungan Investor")}}
                </h1>
            </div>
        </div>
    </section>

    <section class="hubungan-investor">
        <div class="container">
            <div class="box-head">
                <div class="subtitle fw-bold" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="200">
                    {{__("Temukan informasi terkini mulai dari laporan dan ikhtisar keuangan, hingga berita terbaru tentang perkembangan dan kinerja Autopedia.")}}
                </div>
            </div>
            <div class="row box-content">
                @foreach( \App\Models\Category::whereMenu('hubungan-investor')->active()->sequence()->get() as $category)
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
            </div>
        </div>
    </section>
</div>
@stop