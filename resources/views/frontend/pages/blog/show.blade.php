@extends('frontend.layouts.blog')

@section('page-title'){{ $blog->getTranslated('title') }} - Autopedia @endsection
@section('meta_desc'){{ $blog->meta_desc}}@endsection
@section('keyword'){{ $blog->keyword }}@endsection
@section('image'){{ URL::to( $blog->image) }}@endsection


@section('content')
<div class="blog">
    <section class="banner-jumbo bg-white">
        <div class="container">
            <img class="d-none d-md-flex img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-one-banner-desktop.webp') }}" alt="banner">
            <img class="d-flex d-md-none img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-one-banner-mobile.webp') }}" alt="banner">
            <div class="box-title">
                <h1 class="text-head common-bold">
                    {{__("Blog, Berita & Press Release")}}
                </h1>
            </div>
        </div>
    </section>

    <section class="content-blog">
        <div class="container">
            <div class="box-button" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="300">
                <a href="{{ route('blog') }}" target="_self" rel="noopener noreferrer" class="btn btn-back">
                    <i class="fa-solid fa-arrow-left"></i>
                    {{__("Kembali")}}
                </a>
            </div>
            <div class="box-content">
                <div class="title common-bold" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="400">
                    {{ $blog->getTranslated('title') }}
                </div>
                <div class="date" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="500">
                    {{ $blog->created_at->format('d F Y') }}
                </div>
                <img class="img-fluid img-cover" src="{{ asset($blog->image) }}" alt="{{ $blog->title_in }}" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="600">
                <p data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="700">
                    {!! $blog->getTranslated('description') !!}
                </p>
            </div>
        </div>
    </section>

    <section class="other-blog">
        <div class="container">
            <div class="box-head">
                <div class="title-box" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="400"
                    data-aos-delay="200">
                    <h4 class="text">
                        Blog Lainnnya
                    </h4>
                </div>
            </div>
            <div class="row g-4">
                @foreach( $related_blogs as $blog )
                <div class="col-4 box-card" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="400"
                    data-aos-delay="500">
                    <div class="card h-100">
                        <a href="{{ route('blog.show', ['blog' => $blog->slug]) }}" class="link-blog">
                            <div class="card-header">
                                <img src="{{ asset($blog->thumbnail) }}" class="card-img-top" alt="thumbnail">
                                <div class="category">{{ $blog->blog_category->getTranslated('category') }}</div>
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
        </div>
    </section>
</div>

@stop