@extends('frontend.layouts.app')

@section('page-title'){{ $category->getTranslated('category')}} - Autopedia @endsection

@section('content')
<!-- Special condition for Analisa Saham, layoutnya sendiri -->
@if($category->slug=='analisa-saham')
    @include('frontend.pages.files.analisa-saham')
@else
<div class="transparansi">
    <section class="banner-jumbo bg-white">
        <div class="container">
            <img class="d-none d-md-flex img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-three-banner-desktop.webp') }}" alt="banner">
            <img class="d-flex d-md-none img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-three-banner-mobile.webp') }}" alt="banner">
            <div class="box-title common-bold">
                <h1 class="text-head" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="200">
                    {{ $category->getTranslated('category')}}
                </h1>
            </div>
        </div>
    </section>

    <section class="@if($category->slug=='laporan-tahunan') template-download-two @else template-download @endif">
        <div class="container">
            <div class="box-breadcrumb">
                <nav class="list-menu" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{URL::to('/')}}">{{__("Beranda")}}</a>
                        </li>
                        @if($category->menu=='info-perusahaan')
                        <li class="breadcrumb-item">
                            <a href="{{ route('about') }}">{{__("Info Perusahaan")}}</a>
                        </li>
                        @else
                        <li class="breadcrumb-item">
                            <a href="{{URL::to('/transparansi')}}">{{__("Transparansi")}}</a>
                        </li>
                        @if($category->menu=='tata-kelola-perusahaan')
                        <li class="breadcrumb-item">
                            <a href="{{URL::to('/transparansi/tata-kelola-perusahaan')}}">{{__("Tata Kelola Perusahaan")}}</a>
                        </li>
                        @elseif ($category->menu=='hubungan-investor')
                        <li class="breadcrumb-item">
                            <a href="{{URL::to('/transparansi/hubungan-investor')}}">{{__("Hubungan Investor")}}</a>
                        </li>
                        @endif
                        {{-- <li class="breadcrumb-item">
                            {!! $category->getMenuLink() !!}
                        </li> --}}
                        @endif
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $category->getTranslated('category') }}
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="box-content">
                <!-- Special condition for Laporan Tahunan, layoutnya pakai image -->
                @if($category->slug=='laporan-tahunan')
                    @include('frontend.pages.files.list-image')

                @else
                <div class="d-flex align-items-start item-box">
                    @include('frontend.pages.files.sidebar')
                    @include('frontend.pages.files.list')
                </div>
                @endif
            </div>
        </div>
    </section>
</div>
@endif

@stop
