@foreach( $management as $item )
<!-- Full screen modal -->
<div class="modal fade" id="management-{{$item->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-body">
                <section class="banner-modal bg-white">
                    <div class="container">
                        <img class="d-none d-md-flex img-fluid cover-banner" src="{{ asset($item->image_banner) }}" alt="banner">
                        <img class="d-flex d-md-none img-fluid cover-banner" src="{{ asset($item->image_mobile ) }}" alt="banner">
                        <div class="row box-item">
                            {{-- <img class="img-fluid icon-img" src="{{ asset('assets/images/webp/menejemen/ic-popup-management.png') }}" alt="icon"> --}}
                            <div class="col-md-7 col-12 box-content">
                                <div class="box-button" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="400" data-aos-delay="300">
                                    <a class="text-decoration-none text-white" data-bs-dismiss="modal" aria-label="Close" target="_self" rel="noopener noreferrer" class="btn btn-back">
                                        <i class="fa-solid fa-arrow-left"></i>
                                        <span>Kembali</span>
                                    </a>
                                </div>
                                <div class="box-text">
                                    <div class="text-head common-bold">
                                        {{ $item->name }}
                                    </div>
                                    <div class="subhead">
                                        {{ $item->getTranslated('position') }}
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-5 col-12 box-img">
                                <img class="img-fluid people" src="{{ asset($item->image) }}" alt="profile">
                            </div> --}}
                        </div>
                    </div>
                </section>

                <section class="description mt-5 mb-4">
                    <div class="container">
                        <div class="content">
                            <div class="desc">
                                {!! $item->getTranslated('description') !!}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endforeach