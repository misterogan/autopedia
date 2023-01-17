@extends('frontend.layouts.app')

@section('page-title'){{__("Anak Perusahaan")}} - Autopedia @endsection

@section('content')

@php
$businesses = \App\Models\Business::sequence()->active()->get();
@endphp

<div class="transparansi">
    <section class="banner-jumbo bg-white">
        <div class="container">
            <img class="d-none d-md-flex img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-three-banner-desktop.webp') }}" alt="banner">
            <img class="d-flex d-md-none img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-three-banner-mobile.webp') }}" alt="banner">
            <div class="box-title common-bold">
                <h1 class="text-head" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400"
                    data-aos-delay="200">
                    {{__("Anak Perusahaan")}}
                </h1>
            </div>
        </div>
    </section>

    <section class="template-download">
        <div class="container">
            <div class="box-breadcrumb">
                <nav class="list-menu" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{URL::to('/')}}">{{__("Beranda")}}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{URL::to('/transparansi')}}">{{__("Transparansi")}}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a
                                href="{{URL::to('/transparansi/tata-kelola-perusahaan')}}">{{__("Tata Kelola Perusahaan")}}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{__("Anak Perusahaan")}}
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="box-content">
                <div class="d-flex align-items-start item-box">
                    <div class="d-none d-sm-block desktop-menu">
                        <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"
                            data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400">
                            @foreach ( $businesses as $business)
                            <button class="nav-link @if($loop->first) active @endif" data-bs-toggle="pill"
                                data-bs-target="#business-{{$business->id}}" type="button" role="tab"
                                aria-controls="business-{{$business->id}}" aria-selected="true">
                                {{ $business->title }}
                            </button>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-flex d-sm-none mobile-menu">
                        <div class="accordion" id="accordionExample">
                            <button class="card card-link" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                <span class="header-title">
                                    {{__("Lihat Semua")}}
                                </span>
                                <i class="bi bi-caret-down-fill"></i>
                            </button>
                            <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                                <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"
                                    data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400">
                                    @foreach ( $businesses as $business)
                                    <button class="nav-link @if($loop->first) active @endif" data-bs-toggle="pill" data-bs-target="#business-{{$business->id}}" type="button" role="tab" aria-controls="business-{{$business->id}}" aria-selected="true">
                                        {{ $business->title }}
                                    </button>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent" data-aos="fade-right" data-aos-easing="linear"
                        data-aos-duration="400" data-aos-delay="200">
                        @foreach ( $businesses as $business)
                        <div class="tab-pane fade @if($loop->first) show active @endif" id="business-{{$business->id}}"
                            role="tabpanel" aria-labelledby="business-{{$business->id}}-tab" tabindex="0">
                            <div class="box-children">
                                @if($business->logo_image)
                                <div class="box-logo">
                                    <img class="img-fluid logo" src="{{ asset($business->logo_image) }}" alt="logo">
                                </div>
                                @endif
                                <div class="box-desc">
                                    {!! $business->getTranslated('description') !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop