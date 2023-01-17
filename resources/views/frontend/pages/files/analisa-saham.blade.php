<div class="analysis-saham">
    <section class="banner-jumbo bg-white">
        <div class="container">
            <img class="d-none d-md-flex img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-three-banner-desktop.webp') }}" alt="banner">
            <img class="d-flex d-md-none img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-three-banner-mobile.webp') }}" alt="banner">
            <div class="box-title">
                <h1 class="text-head common-bold" data-aos="fade-up" data-aos-easing="ease-in-sine"
                    data-aos-duration="400" data-aos-delay="200">
                    {{__("Analisa Saham")}}
                </h1>
                {{-- <div class="subhead" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="400">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac
                    aliquet odio mattis.
                </div> --}}
            </div>
        </div>
    </section>

    <section class="section-one pt-5">
        <div class="container pt-5">
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
                            <a href="{{URL::to('/transparansi/hubungan-investor')}}">{{__("Hubungan Investor")}}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $category->getTranslated('category') }}
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="d-flex justify-content-center my-5">
                <h1 class="common-bold">{{__("Informasi Saham Autopedia")}}</h1>
            </div>
            <div class="index-saham">
                <div class="harga-saham gap-2">
                    <p class="border border-primary border-2 r-3 m-0">NAV</p>
                    <p id="current-price" class="common-bold m-0">0</p>
                    <p id="current-date" class="m-0">-</p>
                </div>
                <canvas id="newChart" class="common-bold"></canvas>
                <div class="box-button">
                    <a href="https://finance.yahoo.com/quote/ASLC.JK/" target="_blank" rel="noopener noreferrer"
                        class="btn btn-outline-grey">
                        Sumber: yahoo.finance.com
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="template-download">
        <div class="container">
            <div class="box-content">
                <h3 class="fw-bold my-3">
                    {{__("Berikut kumpulan analisa saham Autopedia untuk mempermudah para pemegang saham dalam memantau informasi & rekomendasi saham Autopedia")}}:
                </h3>
                <div class="d-flex align-items-start item-box">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="analisa-saham" role="tabpanel"
                            aria-labelledby="bagan-organisasi-tab" tabindex="0">
                            @include('frontend.pages.files.filter')
                            <input type="hidden" id="segment_url_cat" value="{{ Request::segment(3) }}">
                            <div class="box"></div>
                            <input type="hidden" id="segment_url_cat" value="{{ Request::segment(3) }}">
                            <div class="box-list">
                                @foreach( $files_sub as $file)
                                <div class="box-item" data-aos="fade-up" data-aos-easing="linear"
                                    data-aos-duration="400" data-aos-delay="200">
                                    <div class="box-content">
                                        <div class="box-icon">
                                            <img src="{{ asset('assets/images/svg/icon-pdf.svg') }}"
                                                class="img-fluid icon" alt="icon">
                                        </div>
                                        <div class="box-text">
                                            <div class="title">
                                                {{ $file->getTranslated('file_name') }}
                                            </div>
                                            <div class="date">
                                                {{ $file->created_at->format('d F Y') }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-button">
                                        <a href="{{ asset($file->file_path) }}" class="btn btn-download fw-bold"
                                            target="_blank">
                                            {{__("Selengkapnya")}}
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                <div class="d-flex justify-content-center box-pagination mt-4">
                                    {{ $files_sub->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>