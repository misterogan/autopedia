<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container d-flex justify-content-between">
        <a class="navbar-brand d-flex align-items-center poppins" href="{{ route('home') }}">
            <img id="imageLogo" src="{{ asset('assets/images/png/logo.png') }}" class="img-fluid logo" alt="logo">
        </a>
        <button class="navbar-toggler x" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
            aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav core-menu ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        {{ __('Bisnis') }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="{{ route('product') }}" class="dropdown-item title-nav">{{__("Bisnis Kami")}}</a>
                            {{-- <a class="dropdown-item title-nav disabled" href="#">Bisnis Kami</a> --}}
                        </li>
                        @foreach( \App\Models\Business::sequence()->active()->get() as $business)
                        <li>
                            <a class="dropdown-item"
                                href="{{ route('product', ['slug' => $business->slug]) }}">{{ $business->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown has-megamenu">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        {{__("Perusahaan")}}
                    </a>
                    <div class="dropdown-menu megamenu" role="menu">
                        <div class="row g-3">
                            <div class="col-md-3 col-12">
                                <div class="col-megamenu">
                                    <a href="#" class="title">{{__("Info Perusahaan")}}</a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('about') }}">{{__("Tentang Perusahaan")}}</a></li>
                                        @foreach(
                                        \App\Models\Category::whereMenu('info-perusahaan')->active()->sequence()->get()
                                        as $category)
                                        <li>
                                            <a
                                                href="{{ route('transparansi.category', ['category' => $category->slug]) }}">
                                                {{$category->getTranslated('category')}}
                                            </a>
                                        </li>
                                        @endforeach
                                        <li><a href="{{ route('career') }}">{{__("Karir")}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9 col-12">
                                <div class="col-megamenu">
                                    <a href="{{URL::to('/transparansi')}}" class="title">{{__("Transparansi")}}</a>
                                </div>
                                <div class="row submenu">
                                    <div class="col-md-6 col-12">
                                        <div class="col-submenu">
                                            <a href="{{URL::to('/transparansi/tata-kelola-perusahaan')}}" class="title">
                                                {{__("Tata Kelola Perusahaan")}}
                                            </a>
                                            <ul class="list-unstyled">
                                                @foreach(
                                                \App\Models\Category::whereMenu('tata-kelola-perusahaan')->active()->sequence()->get()
                                                as $category)
                                                <li>
                                                    <a
                                                        href="{{ route('transparansi.category', ['category' => $category->slug]) }}">
                                                        {{$category->getTranslated('category')}}
                                                    </a>
                                                </li>
                                                @endforeach
                                                <li>
                                                    <a href="{{URL::to('/transparansi/anak-perusahaan')}}">
                                                        {{__("Anak Perusahaan")}}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{URL::to('/transparansi/whistle-blowing-system')}}">
                                                        {{__("Whistleblowing System")}}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="col-submenu">
                                            <a href="{{URL::to('/transparansi/hubungan-investor')}}"
                                                class="title">{{__("Hubungan Investor")}}</a>
                                            <ul class="list-unstyled">
                                                @foreach(
                                                \App\Models\Category::whereMenu('hubungan-investor')->active()->sequence()->get()
                                                as $category)
                                                <li>
                                                    <a
                                                        href="{{ route('transparansi.category', ['category' => $category->slug]) }}">
                                                        {{$category->getTranslated('category')}}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/hubungi-kami')}}">{{__("Hubungi Kami")}}</a>
                </li>
            </ul>
            <ul class="navbar-nav lang-menu">
                <li class="nav-item">
                    <button type="button" class="search-link cursor-pointer" data-bs-toggle="modal"
                        data-bs-target="#searchModal">
                        <i class="bi bi-search"></i>
                    </button>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-globe"></i>
                        {{ strtoupper(LaravelLocalization::getCurrentLocale()) }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item title-nav disabled" href="#">{{__("Pilih Bahasa")}}</a>
                        <li>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="fw-bold">
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                class="dropdown-item fw-bold">
                                <i class="bi bi-globe"></i> {{ strtoupper($localeCode) }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav lang-mobile">
                <div class="row">
                    <div class="col-12">
                        <div class="search">
                            <form class="d-flex align-items-center" role="search" action="{{route(LaravelLocalization::getCurrentLocale().'.search') }}" method="GET">
                                @csrf
                                <i class="bi bi-search fs-20"></i>
                                <input type="text" name="query" class="form-control" placeholder="{{__("Ketik apa yang ingin kamu cari")}}" />
                            </form>
                        </div>
                        <div class="box-button">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <div class="list-item">
                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                    class="btn btn-auto-secondary-2 @if(LaravelLocalization::getCurrentLocale()==$localeCode) active @endif">
                                    {{ strtoupper($localeCode) }}
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>
@include('frontend.partials.modal-search')
