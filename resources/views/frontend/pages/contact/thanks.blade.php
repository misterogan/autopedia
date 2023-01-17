@extends('frontend.layouts.app')

@section('page-title') {{__("Terima Kasih")}} - Autopedia | Omnichannel Automotive Marketplace @endsection

@section('content')
<div class="thanks">
    <section class="section-one">
        <div class="container-fluid">
            <div class="box-head">
                <div class="box-icon text-center" data-aos="fade-up" data-aos-delay="200" data-aos-easing="ease-in-sine"
                    data-aos-duration="400">
                    <img src="{{ asset('assets/images/png/icon-success.png') }}" class="icon img-fluid" alt="icon">
                </div>
                <p class="subtitle" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease-in-sine"
                    data-aos-duration="400">
                    {{__("Terima kasih telah menguhubungi Autopedia. Kami akan membalas pesanmu secepatnya, cek email kamu secara berkala ya.")}}
                </p>
                <div class="d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="600" data-aos-easing="ease-in-sine" data-aos-duration="600">
                    <a target="_self" href="/" class="btn btn-auto-primary-1">
                        {{__("Kembali Ke Beranda")}}
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
