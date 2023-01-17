@extends('frontend.layouts.app')

@section('page-title') {{__("Hubungi Kami")}} - Autopedia @endsection

@section('content')
<div class="contact">
    <section class="banner-jumbo bg-white">
        <div class="container">
            <img class="d-none d-md-flex img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-two-banner-desktop.webp') }}" alt="banner">
            <img class="d-flex d-md-none img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-two-banner-mobile.webp') }}" alt="banner">
            <div class="box-title">
                <h1 class="text-head common-bold" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="200">
                    {{__("Hubungi Kami")}}
                </h1>
                <div class="subhead" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="200">
                    {{__("Kami siap melayani Anda dengan senang hati. Jika ada pertanyaan, permintaan atau pengaduan terkait Perusahaan, Anda dapat mengisi form atau menghubungi kontak di bawah ini.")}}
                </div>
            </div>
        </div>
    </section>

    <section class="section-one">
        <div class="container">
            <div class="box-address">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-7 maps" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="200">
                        <div class="mapouter">
                            <iframe id="gmap_canvas"
                                src="https://maps.google.com/maps?q=autopedia%20indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                width="600" height="450" frameborder="0" style="border:0" scrolling="no"
                                marginheight="0" marginwidth="0" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-5 address-company" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="200">
                        <div class="box-item">
                            <div class="title-contact fw-bold">{{__("Alamat")}}</div>
                            <div class="text-contact">
                                Kuningan City Lantai UG56<br>
                                Jl. Prof DR. Satrio No. Kav 18<br>
                                Jakarta Selatan 12940
                            </div>
                        </div>
                        <div class="box-item">
                            <div class="title-contact fw-bold">{{__("Telepon")}}</div>
                            <div class="text-contact">
                                021 50862055
                            </div>
                        </div>
                        <div class="box-item">
                            <div class="title-contact fw-bold">{{__("Komunikasi Perusahaan")}}</div>
                            <div class="text-contact">
                                <a href="mailto:corporate.secretary@autopedia.id" title="Send email">corporate.secretary@autopedia.id</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-two">
        <img class="img-fluid icon-tone-1" src="{{ asset('assets/images/png/ic-right-top.png') }}" alt="icon">
        <img class="img-fluid icon-tone-2" src="{{ asset('assets/images/png/ic-left-bottom.png') }}" alt="icon">
        {{-- <img class="img-fluid bg-section" src="{{ asset('assets/images/webp/bg-contact.webp') }}" alt="background"> --}}
        <div class="container">
            <div class="box-head">
                <div class="title-box" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="400">
                    <span class="text common-bold">
                        {{__("Butuh Bantuan?")}}
                        <img src="{{ asset('assets/images/png/icon-line-w.png') }}" class="img-fluid icon-line"
                            alt="icon">
                    </span>
                </div>
            </div>
            <div class="box-form" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="600">

                <form class="row contact" id="contact_us_form">
{{--                    {!! app('captcha')->render(); !!}--}}
                    <div class="col-12 item-box">
                        <label for="validationName" class="form-label">
                            {{__("Nama Anda")}}
                            <span>*</span>
                        </label>
                        <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="{{__("Nama Anda")}}" required>
                        {{-- <input type="text" class="form-control is-valid" id="validationCustom01" required> --}}
                        {{-- <div class="valid-feedback">
                            Looks good!
                        </div> --}}
                    </div>
                    <div class="col-12 item-box">
                        <label for="validationEmail" class="form-label">
                            {{__("Email Anda")}}
                            <span>*</span>
                        </label>
                        <input type="email" class="form-control" id="validationEmail" name="email" placeholder="{{__("Email Anda")}}" required>
                        {{-- <input type="email" class="form-control is-invalid" id="validationCustom02" required> --}}
                        {{-- <div class="invalid-feedback">
                            Please choose a Lastname.
                        </div> --}}
                    </div>
                    <div class="col-12 item-box">
                        <label for="validationPhone" class="form-label">
                            {{__("Nomor Telepon Anda")}}
                            <span>*</span>
                        </label>
                        <input type="phone" class="form-control" id="validationPhone" name="phone" placeholder="{{__("Nomor Telepon Anda")}}">
                    </div>
                    <div class="col-12 item-box">
                        <label for="validationMessage">
                            {{__("Isi Pesan")}}
                            <span>*</span>
                        </label>
                        <textarea class="form-control" placeholder="{{__("Isi Pesan")}}" name="message" required></textarea>
                    </div>
                    <div class="col-12 item-box mt-3">
                        <div class="d-grid gap-2">
                            <button class="btn btn-submit fw-bold" type="submit">{{__("Kirim Pesan")}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<script>
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@stop
