<div class="d-none d-sm-block desktop-menu">
    <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" data-aos="fade-right"
        data-aos-easing="linear" data-aos-duration="400">
        @foreach ( $category->subcategories()->active()->get() as $subcategory )
        {{-- <button id="sub_nav" onclick="set_subvalue('{{$subcategory->id}}')" class="nav-link @if($loop->first)
        active @endif" data-bs-toggle="pill" data-bs-target="#subcat-{{$subcategory->id}}"--}}
        {{-- type="button" role="tab" aria-controls="subcat-{{$subcategory->id}}" aria-selected="true">--}}
        {{-- {{$subcategory->getTranslated('subcategory_name')}}--}}
        {{-- </button>--}}
        <a href="/../{{$segment_2}}/{{$category->slug}}/{{$subcategory->id}}"
            class="nav-link @if($subcategory->id ==  Request::segment(4) ) active @endif" role="tab"
            aria-controls="subcat-{{$subcategory->id}}" aria-selected="true">
            {{$subcategory->getTranslated('subcategory_name')}}
        </a>
        @endforeach
    </div>
</div>
<div class="d-flex d-sm-none mobile-menu">
    <div class="accordion" id="accordionExample">
        <button class="card card-link" data-bs-toggle="collapse" data-bs-target="#collapseOne">
            <span class="header-title">
                {{__("Lihat Semua")}}
            </span>
            <i class="bi bi-caret-down-fill"></i>
        </button>
        <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
            <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" data-aos="fade-right"
                data-aos-easing="linear" data-aos-duration="400">
                @foreach ( $category->subcategories()->active()->get() as $subcategory )
                <a href="/../{{$segment_2}}/{{$category->slug}}/{{$subcategory->id}}"
                    class="nav-link @if($subcategory->id ==  Request::segment(4) ) active @endif" role="tab"
                    aria-controls="subcat-{{$subcategory->id}}" aria-selected="true">
                    {{$subcategory->getTranslated('subcategory_name')}}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>