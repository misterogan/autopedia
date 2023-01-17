@extends('frontend.layouts.app')

@section('page-title') {{__("Terima Kasih")}} - Autopedia | Omnichannel Automotive Marketplace @endsection

@section('content')
<div class="thanks">
    <div id="showBoxButton" class="hide-box">
        <div class="btn-wa">
            <a href="https://wa.link/ggh0dd" target="_blank" rel="noopener noreferrer" title="Chat Whatsapp">
                <img src="{{ asset('assets/images/mk/png/icon-wa.png') }}" class="icon img-fluid" alt="icon">
            </a>
        </div>
        <div class="btn-top">
            <a href="#" title="Back To Top">
                <img src="{{ asset('assets/images/mk/png/icon-backtop.png') }}" class="icon img-fluid" alt="icon">
            </a>
        </div>
    </div>

    <section id="premiumview" class="section-one">
        <div class="container-fluid">
            <div class="box-head">
                <div class="box-icon text-center">
                    <i class='bx bx-check-circle'></i>
                </div>
                <h2 class="title-section shippori" data-aos="fade-up" data-aos-easing="ease-in-sine"
                    data-aos-duration="600">
                    Thank You!
                </h2>
                <p class="subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-easing="ease-in-sine"
                    data-aos-duration="600">
                    Your Message Has Been Sent
                </p>
                <div class="d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300" data-aos-easing="ease-in-sine"
                    data-aos-duration="600">
                    <a target="_self" href="/" class="btn btn-gold">Back To Homepage</a>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
