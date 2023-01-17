@extends('frontend.layouts.app')

@section('page-title'){{__("Hasil Pencarian")}} - Autopedia @endsection

@section('content')
<div class="other-page">
    <section class="search-result">
        <img class="img-fluid icon-tone-1" src="{{ asset('assets/images/png/ic-right-top.png') }}" alt="icon">
        <img class="img-fluid icon-tone-2" src="{{ asset('assets/images/png/ic-left-bottom.png') }}" alt="icon">
        <div class="container">
            <div class="box-head">
                <h1 class="title-box" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                    <span class="text common-bold">
                        {{__("Butuh Bantuan?")}}
                        <img src="{{ asset('assets/images/png/icon-line-w.png') }}" class="img-fluid icon-line"
                            alt="icon">
                    </span>
                </h1>
                <form class="d-flex align-items-center text-center" role="search"
                    action="{{ route(LaravelLocalization::getCurrentLocale().'.search') }}" method="GET"
                    data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="200">
                    @csrf
                    <input type="text" name="query" class="form-control search-field" placeholder="{{__("Ketik apa yang ingin kamu cari")}}"/>
                </form>
            </div>
        </div>
    </section>

    <section class="content-result">
        <div class="container">
            <div class="box-content shadow" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400"
                data-aos-delay="600">
                <div class="box-head">
                    <div class="title-box" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400"
                        data-aos-delay="400">
                        <span class="text common-bold">
                            {{__("Hasil Pencarian")}}
                            {{-- <img src="{{ asset('assets/images/png/icon-line-w.png') }}" class="img-fluid icon-line"
                            alt="icon"> --}}
                        </span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="counting-label common-bold">
                            <span class="common-bold">{{ $searchResults->count() }}</span>
                            {{__("hasil ditemukan untuk")}}
                            <span class="common-bold">"{{ request('query') }}"</span>
                        </div>
                    </div>


                    <div class="card-body">
                        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                        @foreach($modelSearchResults as $searchResult)
                        <div class="box-list">
                            @if($type == 'files')
                            <div class="box-item">
                                <div class="box-content">
                                    <div class="box-icon common-bold">
                                        {{ ucfirst($type) }}
                                    </div>
                                    <div class="box-text">
                                        <div class="title">
                                            {{ $searchResult->title }}
                                            {{-- {{ $file->getTranslated('file_name') }} --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="box-button">
                                    <a href="../{{ $searchResult->url }}" class="btn btn-download fw-bold"
                                        target="_blank">
                                        {{__("Selengkapnya")}}
                                    </a>
                                </div>
                            </div>
                            @else
                            <div class="box-item">
                                <div class="box-content">
                                    <div class="box-icon common-bold">
                                        {{ ucfirst($type) }}
                                    </div>
                                    <div class="box-text">
                                        <div class="title">
                                            {{ $searchResult->title }}
                                        </div>
                                    </div>
                                </div>
                                <div class="box-button">
                                    <a href="{{ $searchResult->url }}" class="btn btn-download fw-bold" target="_self">
                                        {{__("Selengkapnya")}}
                                    </a>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection