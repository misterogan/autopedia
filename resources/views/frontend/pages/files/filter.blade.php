<div class="box-filter" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400"
     data-aos-delay="100">
    <div class="dropdown one">
        <select class="form-control dropdown-toggle " id="filter1" aria-labelledby="dropdownMenuButton">
            <option value="">{{__("Urutkan Berdasarkan")}}</option>
            <option value="order">A-Z</option>
            <option value="newest">{{__("Terbaru")}}</option>
            <option value="oldest">{{__("Terlama")}} </option>
        </select>
    </div>
    <div class="dropdown two">
        <select class="form-control  dropdown-toggle" id="filter2">
            <option value="">{{__("Lihat Semua Tahun")}}</option>
            @foreach($files as $file)
                <option value="{{$file->file_year}}">{{$file->file_year}}</option>
            @endforeach
        </select>
    </div>
    <div class="dropdown three">
        <select class="form-control  dropdown-toggle" id="filter3">
            <option value="">{{__("Lihat Semua Bulan")}}</option>
            <option value="1">{{__("Januari")}}</option>
            <option value="2">{{__("Februari")}}</option>
            <option value="3">{{__("Maret")}}</option>
            <option value="4">{{__("April")}}</option>
            <option value="5">{{__("Mei")}}</option>
            <option value="6">{{__("Juni")}}</option>
            <option value="7">{{__("Juli")}}</option>
            <option value="8">{{__("Agustus")}}</option>
            <option value="9">{{__("September")}}</option>
            <option value="10">{{__("Oktober")}}</option>
            <option value="11">{{__("November")}}</option>
            <option value="12">{{__("Desember")}}</option>
        </select>
    </div>
</div>
