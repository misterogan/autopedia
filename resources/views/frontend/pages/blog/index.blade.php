@extends('frontend.layouts.app')

@section('page-title') Blog - Autopedia @endsection

@section('content')
<div class="blog">
    <section class="banner-jumbo bg-white">
        <div class="container">
            <img class="d-none d-md-flex img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-one-banner-desktop.webp') }}" alt="banner">
            <img class="d-flex d-md-none img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-one-banner-mobile.webp') }}" alt="banner">
            <div class="box-title">
                <h1 class="text-head common-bold" data-aos="fade-up" data-aos-easing="ease-in-sine"
                    data-aos-duration="400" data-aos-delay="200">
                    {{__("Blog, Berita & Press Release")}}
                </h1>
            </div>
        </div>
    </section>

    <section class="section-one">
        <div class="container">
            <div class="box-head">
                <div class="title-box" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="400"
                    data-aos-delay="200">
                    <h4 class="text">
                        {{__("Kategorikan Berdasarkan :")}}
                    </h4>
                </div>
                <ul class="nav nav-pills" id="pills-tab" role="tablist" data-aos="fade-in" data-aos-easing="linear"
                    data-aos-duration="400" data-aos-delay="300">
                    @foreach ( $categories as $category )
                    <li class="nav-item" role="presentation">
                        <a class="btn btn-category nav-link @if($category->id==@$current_category->id) active @endif"
                            type="button" href="{{ route('blog.category', ['category' => $category->slug]) }}">
                            {{ $category->getTranslated('category') }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" role="tabpanel" tabindex="0">
                    <div class="row g-4">
                        @foreach($blogs as $blog)
                        <div class="col-12 col-md-4 box-card" data-aos="fade-right" data-aos-easing="linear"
                            data-aos-duration="400" data-aos-delay="500">
                            <div class="card h-100">
                                <a href="{{ route('blog.show', [ 'blog'=> $blog->slug ]) }}" class="link-blog">
                                    <div class="card-header">
                                        <img src="{{ asset($blog->thumbnail) }}" class="card-img-top" alt="thumbnail">
                                        <div class="category">{{ $blog->blog_category->getTranslated('category') }}
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title common-bold">
                                            {{ $blog->getTranslated('title') }}
                                        </div>
                                        <div class="card-date">
                                            {{ $blog->created_at->format('d F Y') }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach

                        
                    </div>
                    <div class="d-flex justify-content-center box-pagination mt-4">
                        {{ $blogs->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

@stop