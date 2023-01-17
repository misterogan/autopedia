@extends('frontend.layouts.app')

@section('page-title'){{__("Bergabunglah Bersama Autopedia")}} @endsection

@section('content')
<div class="karir">
    <section class="banner-jumbo bg-white">
        <div class="container">
            <img class="d-none d-md-flex img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-two-banner-desktop.webp') }}" alt="banner">
            <img class="d-flex d-md-none img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-two-banner-mobile.webp') }}" alt="banner">
            <div class="box-title">
                <h1 class="text-head common-bold" data-aos="fade-up" data-aos-easing="ease-in-sine"
                    data-aos-duration="400" data-aos-delay="200">
                    {{__("Bergabunglah Bersama Autopedia")}}
                </h1>
                <div class="subhead" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400"
                    data-aos-delay="400">
                    {{__("Ada banyak alasan untuk kamu bergabung dan menjadi bagian dari #LifeAtAutopedia. Autopedia senantiasa memberikan kesempatan bagi karyawan untuk mengembangkan diri dan kemampuan. Pengembangan karir, keseimbangan pekerjaan/ kehidupan, lingkungan kerja yang seru dan kolaboratif? Temukan di Autopedia!")}}
                </div>
            </div>
        </div>
    </section>


    <section class="job-card py-5">
        <div class="container">

            <form method="POST" action="{{  route(LaravelLocalization::getCurrentLocale().'.career.filter')  }}">
                @csrf
            <div class="row my-3">
                <div class="">
                    <label for="email" class="form-label">{{__("Cari Pekerjaan")}}</label>
                    <input type="search-bar" class="form-control" id="search-bar" name="job_name"
                        aria-describedby="search-bar" value="@if( isset($filters['job_name']) ) {!! $filters['job_name'] !!} @endif" placeholder="{{__("Cari berdasarkan pekerjaan. Cth (Management Trainee)")}}">

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm mb-3">
                        {{-- <label for="sertifikasi" class="form-label">Bersertifikasi</label> --}}
                        <select class="form-select" id="search-location" name="job_location">
                            <option value = "" selected>{{__("Semua Lokasi")}}</option>
                            @foreach($businesses as $key => $business)
                                <option value="{{$business}}" @if( isset($filters['job_location']) && $filters['job_location']==$business ) selected @endif>{{$business}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm">
                        {{-- <label for="sertifikasi" class="form-label">Bersertifikasi</label> --}}
                        <select class="form-select" id="search-type-jobs" name="job_type">
                            @php $filters_job_type = isset($filters['job_type']) ? $filters['job_type'] : 0; @endphp
                            <option value= "" selected>{{__("Tipe Pekerjaan")}}</option>
                            <option value="Pro-Hire" @if( $filters_job_type == "Pro-Hire" ) selected @endif>Pro-Hire</option>
                            <option value="Fresh Graduate" @if( $filters_job_type == "Fresh Graduate" ) selected @endif>Fresh Graduate</option>
                            <option value="Internship" @if( $filters_job_type == "Internship" ) selected @endif>Internship</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="col-sm rounded-3 btns">{{__("Temukan Pekerjaan")}}</button>
                </div>
            </form>
        </div>
        <div class="container py-5">
            <h1 class="text-center common-bold mb-3">
                {{ $jobs_count }} {{__("pekerjaan di semua kategori di semua jenis pekerjaan dan lokasi pekerjaan.")}}
            </h1>
            <div class="row py-3">
                @foreach( $jobs as $job )
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="{{ route('career', ['slug' => $job->slug]) }}" class="text-decoration-none">
                        {{-- Card --}}
                        @include("frontend.pages.karir.cards.card")
                    </a>
                </div>
                @endforeach
                <div class="d-flex justify-content-center box-pagination mt-4">
                    {{ $jobs->links('pagination::bootstrap-4') }}
                </div>
            </div>
    </section>
</div>

@stop
