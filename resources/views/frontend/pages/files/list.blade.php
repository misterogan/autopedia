<div class="tab-content" id="v-pills-tabContent">
    <input type="hidden" id="segment_url" value="{{ Request::segment(4) }}">
    <input type="hidden" id="segment_url_cat" value="{{ Request::segment(3) }}">

    <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="subcat-tab" tabindex="0">
        @include('frontend.pages.files.filter')
        <div class="box"></div>
        <div class="box-list">
            @foreach( $files_sub as $file)
            <div class="box-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400"
                data-aos-delay="200">
                <div class="box-content">
                    <div class="box-icon">
                        <img src="{{ asset('assets/images/svg/icon-pdf.svg') }}" class="img-fluid icon" alt="icon">
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
                    <a href="{{ asset($file->file_path) }}" class="btn btn-download fw-bold" target="_blank">
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