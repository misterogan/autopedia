@extends('frontend.layouts.app')

@section('page-title'){{__("Whistleblowing System")}} - Autopedia @endsection

@section('content')
<div class="transparansi">
    <section class="banner-jumbo bg-white">
        <div class="container">
            <img class="d-none d-md-flex img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-two-banner-desktop.webp') }}" alt="banner">
            <img class="d-flex d-md-none img-fluid cover-banner"
                src="{{ asset('assets/images/webp/template-two-banner-mobile.webp') }}" alt="banner">
            <div class="box-title">
                <h1 class="text-head common-bold" data-aos="fade-up" data-aos-easing="ease-in-sine"
                    data-aos-duration="400" data-aos-delay="200">
                    {{__("Whistleblowing System")}}
                </h1>
                <div class="subhead" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400"
                    data-aos-delay="400">
                    {{__("Laporkan apabila Anda melihat pelanggaran pihak internal seperti korupsi, penyalahgunaan wewenang, perbuatan melanggar hukum, pelanggaran kode etik, kebijakan dan peraturan perusahaan, benturan kepentingan, finansial atau non finansial (nama baik perusahaan) dan pelanggaran K3 (Kesehatan Keselamatan Kerja).")}}
                </div>
            </div>
        </div>
    </section>

    <section class="template-wbs">
        <div class="container">
            <div class="box-breadcrumb">
                <nav class="list-menu" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{URL::to('/')}}">{{__("Beranda")}}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{URL::to('/transparansi')}}">{{__("Transparansi")}}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{URL::to('/transparansi/tata-kelola-perusahaan')}}">{{__("Tata Kelola Perusahaan")}}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                        {{__("Whistleblowing System")}}
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="box-content">
                <div class="box-head">
                    <div class="title-box" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400"
                        data-aos-delay="200">
                        <span class="text common-bold">
                            {{__("Whistleblowing System")}}
                            {{-- <img src="{{ asset('assets/images/png/icon-line-w.png') }}" class="img-fluid icon-line"
                            alt="icon"> --}}
                        </span>
                    </div>
                    <div class="desc-box" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400"
                        data-aos-delay="400">
                        <p class="subtitle">
                            {{__("Informasikan penjelasan tindakan, lampirkan bukti pendukung dan sertakan data identitas diri anda.")}}
                        </p>
                    </div>
                </div>
                <div class="box-form" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400"
                    data-aos-delay="600">
                    <form class="row contact" id="wbs_form">

                        <div class="col-12 item-box">
                            <label for="valPelapor" class="form-label">
                                {{__("Tindakan/Perbuatan Yang Dilaporkan")}}
                                <span>*</span>
                            </label>
                            <div class="form-check form-check-inline">
                                <div class="box-radio">
                                    <input class="form-check-input" type="radio" name="radioOptions" id="inlineRadio1"
                                        value="Fraud">
                                    <span class="checkmark"></span>
                                    <label class="form-check-label" for="inlineRadio1">
                                        {{__("Fraud")}}
                                    </label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="box-radio">
                                    <input class="form-check-input" type="radio" name="radioOptions" id="inlineRadio2"
                                        value="Pelanggaran Kode Etik">
                                    <label class="form-check-label" for="inlineRadio2">
                                        {{__("Pelanggaran Kode Etik")}}
                                    </label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="box-radio">
                                    <input class="form-check-input" type="radio" name="radioOptions" id="inlineRadio3"
                                        value="Pelanggaran Benturan Kepentingan">
                                    <label class="form-check-label" for="inlineRadio3">
                                        {{__("Pelanggaran Benturan Kepentingan")}}
                                    </label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="box-radio">
                                    <input class="form-check-input" type="radio" name="radioOptions" id="inlineRadio4"
                                        value="Pelanggaran Hukum/Prosedur Kerja">
                                    <label class="form-check-label" for="inlineRadio4">
                                        {{__("Pelanggaran Hukum/Prosedur Kerja")}}
                                    </label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="box-radio">
                                    <input class="form-check-input" type="radio" name="radioOptions" id="inlineRadio5"
                                        value="Penyalahgunaan Wewenang">
                                    <label class="form-check-label" for="inlineRadio5">
                                        {{__("Penyalahgunaan Wewenang")}}
                                    </label>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="box-radio">
                                    <input class="form-check-input" type="radio" name="radioOptions" id="inlineRadio6"
                                        value="Pelanggaran K3 (Kesehatan Keselamatan Kerja)">
                                    <label class="form-check-label" for="inlineRadio6">
                                        {{__("Pelanggaran K3 (Kesehatan Keselamatan Kerja)")}}
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 item-box">
                            <label for="valPelapor" class="form-label">
                                {{__("Nama Pelapor")}}
                                <span>*</span>
                            </label>
                            <input type="text" class="form-control" name="valPelapor"
                                placeholder="{{__("Ketikan Nama Pelapor")}}" required>
                        </div>
                        <div class="col-12 col-md-6 item-box">
                            <label for="valTerlapor" class="form-label">
                                {{__("Nama Terlapor")}}
                                <span>*</span>
                            </label>
                            <input type="text" class="form-control" name="valTerlapor"
                                placeholder="{{__("Ketikan Nama Terlapor")}}" required>
                        </div>
                        <div class="col-12 col-md-6 item-box">
                            <label for="valPhone" class="form-label">
                                {{__("Telepon Pelapor")}}
                                <span>*</span>
                            </label>
                            <input type="number" class="form-control" name="valPhone"
                                placeholder="{{__("Ketikan Telepon Pelapor")}}" required>
                        </div>
                        <div class="col-12 col-md-6 item-box">
                            <label for="valPosition" class="form-label">
                                {{__("Jabatan Terlapor")}}
                                <span>*</span>
                            </label>
                            <input type="text" class="form-control" name="valPosition"
                                placeholder="{{__("Ketikan Jabatan Terlapor")}}" required>
                        </div>
                        <div class="col-12 col-md-6 item-box">
                            <label for="valLocation" class="form-label">
                                {{__("Lokasi Pelapor")}}
                                <span>*</span>
                            </label>
                            <input type="text" class="form-control" name="valLocation"
                                placeholder="{{__("Ketikan Lokasi Anda Berada")}}" required>
                        </div>
                        <div class="col-12 col-md-6 item-box">
                            <label for="valDate" class="form-label">
                                {{__("Tanggal Kejadian")}}
                                <span>*</span>
                            </label>
                            <div class="input-group date" id="datepicker">
                                <input type="text" class="form-control" name="valDate"
                                    placeholder="{{__("Ketikan Tanggal Kejadian")}}" required>
                                <span class="input-group-append">
                                    <span class="input-group-text d-block">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </span>
                                </span>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 item-box">
                            <label for="valEmail" class="form-label">
                                {{__("Email Pelapor")}}
                                <span>*</span>
                            </label>
                            <input type="email" class="form-control" name="valEmail"
                                placeholder="{{__("Ketikan Email Anda")}}" required>
                        </div>
                        <div class="col-12 col-md-6 item-box">
                            <label for="valScene" class="form-label">
                                {{__("Tempat Kejadian")}}
                                <span>*</span>
                            </label>
                            <input type="text" class="form-control" id="valScene" name="valScene"
                                placeholder="{{__("Ketikan Tempat Kejadian")}}" required>
                        </div>
                        <div class="col-12 item-box">
                            <label for="valMessage">
                                {{__("Isi Laporan")}}
                                <span>*</span>
                            </label>
                            <textarea class="form-control" placeholder="{{__("Ketikan Isi Laporan")}}" name="valMessage"
                                required></textarea>
                        </div>
                        <div class="col-12 item-box">
                            <label for="valNominal" class="form-label">
                                {{__("Nominal")}}
                            </label>
                            {{-- <input type="text" class="form-control" id="valNominal" name="valNominal"
                                placeholder=""> --}}
                            <input type="text" name="valNominal" class="form-control" id="valNominal" aria-describedby="valNominal"
                                placeholder="{{__("Ketikan Nominal")}}">
                        </div>
                        <div class="col-12 item-box mt-3">
                            <label for="valMessage">
                                {{__("Unggah Lampiran")}}
                                <span>*</span>
                            </label>
                            <div class="box-button">
                                <div class="box-item">
                                    <div class="input-group custom-file-button">
                                        <label class="input-group-text custom-file-upload btn btn-outline fw-bold" for="inputGroupFile">
                                            <i class="fa-regular fa-file-lines"></i>
                                            {{__("Upload Lampiran")}}
                                        </label>
                                        <input type="file" class="form-control" name="fileupload" id="inputGroupFile" required>
                                    </div>
                                </div>

                                <div class="box-item d-flex">
                                    <input type="button" class="btn btn-outline fw-bold" onclick="resetForm()" value={{__("Reset")}}>
                                    <button class="btn btn-submit fw-bold" type="submit">{{__("Lapor")}}</button>
                                </div>
                            </div>
                            <span class="help-text">
                                <br/>
                                {{__("Masukkan format gambar dengan (jpeg, jpg, png, pdf, xlsx, xls) dan unggah file maks 10 MB")}}
                            </span>
                        </div>
                        <input type="hidden" name="g-recaptcha-response" value="" id="g-recaptcha-response">
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    // wbs file
    let dengan_rupiah4 = document.getElementById("valNominal");
    dengan_rupiah4.addEventListener("keyup", function (e) {
        dengan_rupiah4.value = formatRupiah(this.value, "Rp. ");
    });

    /* Fungsi */
    function formatRupiah(angka, prefix) {
        let number_string = angka.replace(/[^,\d]/g, "").toString(),
            split = number_string.split(","),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? "." : "";
            rupiah += separator + ribuan.join(".");
        }

        rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
        return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
    }
</script>

@stop
