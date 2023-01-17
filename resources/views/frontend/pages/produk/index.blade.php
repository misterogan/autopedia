@extends('frontend.layouts.app')

@section('page-title') {{__("Bisnis Kami")}} - Autopedia @endsection

@section('content')
<div class="produk">
    <section class="section-one">
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
                        <img src="{{ asset($business->thumbnail_image) }}" class="card-img-top"
                            alt="thumbnail">
                        <div class="card-body">
                            <div class="card-title common-bold">
                                {{ $business->title }}
                            </div>
                            <div class="card-desc">
                                {!! $business->getTranslated('short_description') !!}
                            </div>
                            <div class="box-button">
                                <a href="{{ route('product', ['slug' => $business->slug]); }}" class="btn btn-detail">
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
</div>

@stop