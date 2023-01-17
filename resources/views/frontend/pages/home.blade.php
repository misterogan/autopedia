@extends('frontend.layouts.app')

@section('page-title'){{__("Beranda")}} - Autopedia @endsection

@section('content')
<div class="home">

    <section class="banner-jumbo">
        <div class="container-fluid">
            <div class="swiper swiper-banner-home">
                @include("frontend.pages.stock-indicator")
                <div class="swiper-wrapper">
                    @foreach ($banners as $banner)
                    <div class="swiper-slide">
                        @if ($banner->link)
                        <a target="_blank" href="{{ $banner->link }}"> @endif
                            <img class="d-none d-md-flex" src="{{ $banner->image }}" class="img-fluid banner"
                                alt="banner">
                            <img class="d-flex d-md-none" src="{{ $banner->mobile_image }}"
                                class="img-fluid banner" alt="banner">
                            @if ($banner->link)
                        </a> @endif
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>


    </section>

    <section class="section-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="box-video" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="400">
                        <div class="youtube-container">
                            <div class="youtube-player" data-id="{{ @\App\Models\About::first()->youtube_video_id }}"></div>
                            {{-- <div class="youtube-player">
                                <iframe src="//www.youtube.com/embed/{{ @\App\Models\About::first()->youtube_video_id }}?autoplay=1&amp;enablejsapi=1"
                                frameborder="0" class="youtube-iframe"></iframe>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="box-desc" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="400">
                        <h1 class="title common-bold">{{ @\App\Models\About::first()->getTranslated('title') }}</h1>
                        <div class="text-desc">
                            {{ @\App\Models\About::first()->getTranslated('short_description') }}
                        </div>
                        <div class="box-button">
                            <a href="{{ route('about') }}" class="btn btn-outline-grey">
                                {{__("Selengkapnya")}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-two">
        <img class="img-fluid icon-tone-1" src="{{ asset('assets/images/png/ic-right-top.png') }}" alt="icon">
        <img class="img-fluid icon-tone-2" src="{{ asset('assets/images/png/ic-left-bottom.png') }}" alt="icon">
        <img class="img-fluid icon-one" src="{{ asset('assets/images/png/icon-product-1.png') }}" alt="icon">
        <img class="img-fluid icon-two" src="{{ asset('assets/images/png/icon-product-2.png') }}" alt="icon">
        <img class="img-fluid icon-three" src="{{ asset('assets/images/png/icon-product-3.png') }}" alt="icon">
        <img class="img-fluid icon-four" src="{{ asset('assets/images/png/icon-product-4.png') }}" alt="icon">
        <div class="container">
            <div class="box-head">
                <div class="title-box" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="400"
                    data-aos-delay="200">
                    <h4 class="text common-bold">
                        {{__("Bisnis Kami")}}
                    </h4>
                </div>
            </div>
            <div class="row mb-5 g-4">
                @foreach ($businesses as $business)
                <div class="col-4 box-card" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400"
                    data-aos-delay="500">
                    <div class="card h-100">
                        <img src="{{ asset($business->thumbnail_image) }}" class="card-img-top" alt="thumbnail">
                        <div class="card-body">
                            <div class="card-title common-bold">
                                {{ $business->title }}
                            </div>
                            <div class="card-desc">
                                {!! $business->getTranslated('short_description') !!}
                            </div>
                            <div class="box-button">
                                <a href="{{ route('product', ['slug' => $business->slug]) }}" class="btn btn-detail">
                                    {{__("Selengkapnya")}}
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-three">
        <div class="container">
            <div class="box-head">
                <div class="title-box" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="400"
                    data-aos-delay="200">
                    <h4 class="text common-bold">
                        {{__("Blog Terbaru")}}
                    </h4>
                </div>
                <div class="box-button" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="400"
                    data-aos-delay="300">
                    <a href="{{ route('blog') }}" class="btn btn-detail">
                        {{__("Lihat Semua Blog")}}
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="row mb-4 g-4">
                @foreach ($blogs as $blog)
                <div class="col-4 box-card" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400"
                    data-aos-delay="500">
                    <div class="card h-100">
                        <a href="{{ route('blog.show', ['blog' => $blog->slug]) }}" class="link-blog">
                            <div class="card-header">
                                <img src="{{ asset($blog->thumbnail) }}" class="card-img-top" alt="title-img-blog">
                                <div class="category">{{ $blog->blog_category->getTranslated('category') }}</div>
                            </div>
                            <div class="card-body">
                                <div class="card-title common-bold">
                                    {{ $blog->getTranslated('title') }}
                                </div>
                                <div class="card-date">
                                    {{ $blog->created_at->format('d F Y') }}
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-four">
        <div class="container">
            <div class="box-wbs" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400"
                data-aos-delay="500">
                <a href="{{URL::to('/transparansi/whistle-blowing-system')}}" target="_self"
                    rel="noopener noreferrer">
                    <img class="img-fluid wbs-desktop" src="{{ asset('assets/images/png/whistleblow-desktop.png') }}" alt="wbs">
                </a>
                <a href="{{URL::to('/transparansi/whistle-blowing-system')}}" target="_self"
                    rel="noopener noreferrer">
                    <img class="img-fluid wbs-mobile" src="{{ asset('assets/images/png/whistleblow-mobile.png') }}" alt="wbs">
                </a>
            </div>
        </div>
    </section>
</div>

@stop
