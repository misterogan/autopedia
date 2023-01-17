<div class="modal fade" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <form class="d-flex align-items-center" role="search" action="{{ route(LaravelLocalization::getCurrentLocale().'.search') }}" method="GET">
                    @csrf
                    <i class="bi bi-search fs-20"></i>
                    <input type="text" name="query" class="form-control search-field mx-2 px-2" placeholder="{{__("Ketik apa yang ingin kamu cari")}}" />
                </form>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>
