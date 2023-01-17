@extends('frontend.layouts.app')

@section('page-title') Sitemap - Autopedia @endsection

@section('content')
<div class="other-page">
    <section class="sitemap">
        <div class="container">
            <div class="content-box" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="400"
                data-aos-delay="300">
                <h1 class="title common-bold">
                    Sitemap Autopedia
                </h1>
                <div class="box-item">
                    <ul class="nav flex-column tree-list first">
                        <li class="nav-item">
                            <a class="fs-20 fw-bold title-head" href="{{ route('product') }}">{{ __('Bisnis') }}</a>
                            <ul class="nav flex-column tree-list second">
                                @foreach( \App\Models\Business::sequence()->active()->get() as $business)
                                <li class="nav-item">
                                    <a class="fs-16" href="{{ route('product', ['slug' => $business->slug]) }}">
                                        {{ $business->title }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="fs-20 fw-bold title-head">
                                {{__("Perusahaan")}}
                            </a>
                            <ul class="nav flex-column tree-list second">
                                <li class="nav-item">
                                    <a class="fs-20 fw-bold title-head">
                                        {{__("Info Perusahaan")}}
                                    </a>
                                    <ul class="nav flex-column tree-list third">
                                        <li class="nav-item">
                                            <a class="fs-16" href="{{ route('about') }}">
                                                {{__("Tentang Perusahaan")}}
                                            </a>
                                        </li>
                                        @foreach(
                                        \App\Models\Category::whereMenu('info-perusahaan')->active()->sequence()->get()
                                        as $category)
                                        <li class="nav-item">
                                            <a class="fs-16" href="{{ route('transparansi.category', ['category' => $category->slug]) }}">
                                            {{$category->getTranslated('category')}}
                                            </a>
                                        </li>
                                        @endforeach
                                        <li class="fs-16" class="nav-item  ">
                                            <a href="{{ route('career') }}">
                                                {{__("Karir")}}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="fs-20 fw-bold title-head" href="{{URL::to('/transparansi')}}">
                                        {{__("Transparansi")}}
                                    </a>
                                    <ul class="nav flex-column tree-list third">
                                        <li class="nav-item">
                                            <a class="fs-20 fw-bold title-head" href="{{URL::to('/transparansi/tata-kelola-perusahaan')}}">
                                                {{__("Tata Kelola Perusahaan")}}
                                            </a>
                                            <ul class="nav flex-column tree-list fourth">
                                                @foreach( \App\Models\Category::whereMenu('tata-kelola-perusahaan')->active()->sequence()->get() as $category)
                                                <li class="nav-item">
                                                    <a class="fs-16" href="{{ route('transparansi.category', ['category' => $category->slug]) }}">
                                                        {{$category->getTranslated('category')}}
                                                    </a>
                                                </li>
                                                @endforeach
                                                <li class="nav-item">
                                                    <a class="fs-16" href="{{URL::to('/transparansi/anak-perusahaan')}}">
                                                    {{__("Anak Perusahaan")}}
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="fs-16" href="{{URL::to('/transparansi/whistle-blowing-system')}}">
                                                        {{__("Whistleblowing System")}}
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="fs-20 fw-bold title-head" href="{{URL::to('/')}}">
                                                {{__("Hubungan Investor")}}
                                            </a>
                                            <ul class="nav flex-column tree-list fourth">
                                                @foreach( \App\Models\Category::whereMenu('hubungan-investor')->active()->sequence()->get() as $category)
                                                <li class="nav-item">
                                                    <a class="fs-16" href="{{ route('transparansi.category', ['category' => $category->slug]) }}">
                                                        {{$category->getTranslated('category')}}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="fs-20 fw-bold title-head" href="{{ route('blog') }}"
                                rel="noopener noreferrer">
                                Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="fs-20 fw-bold title-head" href="{{URL::to('/hubungi-kami')}}"
                                rel="noopener noreferrer">
                                {{__("Hubungi Kami")}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="fs-20 fw-bold title-head" href="{{URL::to('/kebijakan-privasi')}}"
                                rel="noopener noreferrer">
                                {{__("Kebijakan Privasi")}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

@stop