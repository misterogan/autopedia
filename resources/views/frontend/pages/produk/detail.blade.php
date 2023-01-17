@extends('frontend.layouts.app')

@section('page-title') {{ $business->title }} - Autopedia @endsection

@section('content')
<div class="produk">
    <section class="banner-jba">
        <div class="container-fluid">
            <div class="swiper swiper-banner-jba">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="d-none d-md-flex img-fluid banner" src="{{ asset($business->banner_image) }}"
                            alt="banner">
                        <img class="d-flex d-md-none img-fluid banner" src="{{ asset($business->banner_image_mobile) }}"
                            alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-product-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="box-img" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="400"
                        data-aos-delay="200">
                        <img src="{{ asset($business->product_image) }}" class="img-fluid product" alt="product">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="box-desc" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="400"
                        data-aos-delay="300">
                        <h1 class="title common-bold">
                            <span>
                                <img src="{{ asset('assets/images/png/icon-star.png') }}" class="img-fluid icon-star"
                                    alt="icon">
                                {{ $business->title }}
                            </span>
                        </h1>
                        <div class="text-desc">
                            {!! $business->getTranslated('description') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(count($business->features()->active()->get())>0))
    <section class="section-product-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 box-accordion">
                    <div class="box-desc" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="400"
                        data-aos-delay="300">
                        <div class="title common-bold">
                            <span>
                                {{ $business->getTranslated('features_title') }}
                                <img src="{{ asset('assets/images/png/icon-sparkle.png') }}"
                                    class="img-fluid icon-sparkle" alt="icon">
                                <img src="{{ asset('assets/images/png/icon-line.png') }}" class="img-fluid icon-line"
                                    alt="icon">
                            </span>
                        </div>
                        <div class="text-desc">{{ $business->getTranslated('features_description') }}</div>
                        <div class="img-features">
                            @foreach ($business->features()->active()->get() as $feature)
                            @if($loop->first)
                            <div id="featMobile-{{ $feature->id }}" class="box-img" data-aos="zoom-in-up"
                                data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="200">
                                <img src="{{ asset($feature->features_image) }}" class="img-fluid product-mobile"
                                    alt="{{ $feature->getTranslated('features_title')  }}">
                            </div>
                            @else
                            <div id="featMobile-{{ $feature->id }}" class="box-img d-none" data-aos="zoom-in-up"
                                data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="200">
                                <img src="{{ asset($feature->features_image) }}" class="img-fluid product-mobile"
                                    alt="{{ $feature->getTranslated('features_title')  }}">
                            </div>
                            @endif
                            @endforeach
                        </div>
                        {{-- <div class="box-img" data-aos="zoom-in-up" data-aos-easing="ease-in-sine"
                            data-aos-duration="400" data-aos-delay="200">
                            <img src="{{ asset('assets/images/webp/product-feature.webp') }}"
                                class="img-fluid product-mobile" alt="product">
                        </div> --}}
                        <div class="accordion" id="accordionFeatures">
                            @foreach ($business->features()->active()->get() as $feature)
                            @if($loop->first)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="head-{{ $feature->id }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#feature-{{ $feature->id }}" aria-expanded="true"
                                        aria-controls="feature-{{ $feature->id }}">
                                        {{ $feature->getTranslated('features_title')  }}
                                    </button>
                                </h2>
                                <div id="feature-{{ $feature->id }}" class="accordion-collapse collapse show"
                                    aria-labelledby="head-{{ $feature->id }}" data-bs-parent="#accordionFeatures">
                                    <div class="accordion-body">
                                        {!! $feature->getTranslated('features_description') !!}
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="head-{{ $feature->id }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#feature-{{ $feature->id }}" aria-expanded="false"
                                        aria-controls="feature-{{ $feature->id }}">
                                        {{ $feature->getTranslated('features_title')  }}
                                    </button>
                                </h2>
                                <div id="feature-{{ $feature->id }}" class="accordion-collapse collapse"
                                    aria-labelledby="head-{{ $feature->id }}" data-bs-parent="#accordionFeatures">
                                    <div class="accordion-body">
                                        {!! $feature->getTranslated('features_description') !!}
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 img-features">
                    @foreach ($business->features()->active()->get() as $feature)
                    @if($loop->first)
                    <div id="features-{{ $feature->id }}" class="box-img" data-aos="zoom-in-up"
                        data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="200">
                        <img src="{{ asset($feature->features_image) }}" class="img-fluid product"
                            alt="{{ $feature->getTranslated('features_title')  }}">
                    </div>
                    @else
                    <div id="features-{{ $feature->id }}" class="box-img d-none" data-aos="zoom-in-up"
                        data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="200">
                        <img src="{{ asset($feature->features_image) }}" class="img-fluid product"
                            alt="{{ $feature->getTranslated('features_title')  }}">
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(count($business->testimonials()->active()->get())>0))
    <section class="section-testimonial">
        <div class="container">
            <div class="box-title common-bold" data-aos="fade-up" data-aos-easing="ease-in-sine"
                data-aos-duration="400">
                {{-- {{__("Apa Kata Mereka")}} {{ $business->title }} --}}
                {{__("Apa Kata Mereka")}}
            </div>
            <div class="swiper swiper-testimonial" data-aos="fade-up" data-aos-easing="ease-in-sine"
                data-aos-duration="400" data-aos-delay="200">
                <div class="swiper-wrapper">
                    @foreach ($business->testimonials()->active()->get() as $testimonial)
                    <div class="swiper-slide">
                        <img class="img-fluid people" src="{{ asset($testimonial->image) }}" />
                        <div class="box-review">
                            <div class="card-top">
                                <div class="name common-bold">{{ $testimonial->name }}</div>
                                <div class="status">{{ $testimonial->getTranslated('description') }}</div>
                                <hr class="line-bottom">
                            </div>
                            <div class="card-bottom">
                                <div class="text-desc">{{ $testimonial->getTranslated('feedback') }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    @endif

</div>

@stop