@extends('frontend.layouts.app')

@section('page-title'){{__("Bergabunglah Bersama Autopedia")}} @endsection

@section('content')
<div class="karir">
  <!-- banner section -->
    <section class="banner-jumbo bg-white">
        <div class="container">
            <img class="d-none d-md-flex img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-two-banner-desktop.webp') }}" alt="banner">
            <img class="d-flex d-md-none img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-two-banner-mobile.webp') }}" alt="banner">
            <div class="box-title">
                <h1 class="text-head common-bold" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="200">
                    {{__("Bergabunglah Bersama Autopedia")}}
                </h1>
                <div class="subhead" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="400">
                    {{__("Ada banyak alasan untuk kamu bergabung dan menjadi bagian dari #LifeAtAutopedia. Autopedia senantiasa memberikan kesempatan bagi karyawan untuk mengembangkan diri dan kemampuan. Pengembangan karir, keseimbangan pekerjaan/ kehidupan, lingkungan kerja yang seru dan kolaboratif? Temukan di Autopedia!")}}
                </div>
            </div>
        </div>
    </section>

    <!-- content -->
    <section class="content-karir my-5">
    	<div class="container pt-4 pb-5">
        <div class="box-button" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="200">
            <a href="{{URL::to('/career')}}" target="_self" rel="noopener noreferrer" class="btn btn-back">
                <i class="fa-solid fa-arrow-left"></i>
                {{__("Kembali")}}
            </a>
        </div>

        <div class="box-content">
            {{-- <div class="container">
                @include("frontend.pages.karir.step-index")
            </div> --}}
            <div class="box-step">
                @include("frontend.pages.karir.step-index")
            </div>
    </section>
	</div>
@stop