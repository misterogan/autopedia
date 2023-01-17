@extends('frontend.layouts.app')

@section('page-title'){{ $job->name }} - Autopedia @endsection

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

    <section class="job-detail my-5">
        <div class="container">
            <div class="box-button" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="200">
                <a href="{{ route('career') }}" target="_self" rel="noopener noreferrer" class="btn btn-back fw-bold">
                    <i class="fa-solid fa-arrow-left"></i>
                    {{__("Kembali")}}
                </a>
            </div>

            {{-- header --}}
            <div class="my-4" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="300">
                <h3 class="common-bold">{{ $job->name }}</h3>
                <div class="row">
                    <div class="col-sm">
                        <p class="m-0">{{__("Lokasi Kerja")}}</p>
                        <p class="fw-bold">{{ $job->location }}</p>
                    </div>
                    <div class="col-sm">
                        <p class="m-0">{{__("Tipe Pekerjaan")}}</p>
                        <p class="fw-bold">{{ $job->job_type }}</p>
                    </div>
                </div>
            </div>

            <div class="mt-2" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="400">
                {!! $job->getTranslated('description') !!}
                <div class="my-4 pb-4">
                    <a href="{{URL::to('/karir/detail-job/job-form?id='.$job->id)}}" target="_self" rel="noopener noreferrer" class="text-decoration-none d-grid gap-2">
                        <button class="btn btns">{{__("Lamar Pekerjaan")}}</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="my-3 job-content">
        <div class="container">
            {!! $job->description_in !!}
            <div class="">
                <a href="{{URL::to('/karir/detail-job/job-form')}}" target="_self" rel="noopener noreferrer"
                    class="text-decoration-none">
                    <button class="btn btns">Lamar</button>
                </a>
            </div>
        </div>
    </section> --}}
</div>

@stop