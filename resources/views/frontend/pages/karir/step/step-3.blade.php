<!-- step-3 -->
<div class="px-2 mt-4">
    <!-- col-1 -->
    <div class="mt-1">
        <h3 class="common-bold mb-2">{{__("Data Pendidikan")}}</h3>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        {{__("Data Pendidikan")}} 1
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- add input components -->
                        <div class="">
                            <div class="row gx-5 my-4">
                                <div class="col-sm">
                                    <div class="">
                                        <label for="nama-institusi-1" class="form-label">
                                            {{__("Nama Institusi")}}
                                            <span>*</span>
                                        </label>
                                        <input type="text" class="form-control" id="nama-institusi-1"
                                            aria-describedby="nama-institusi-1" name="university_name"
                                            placeholder="{{__("Ketikan Nama Institusi")}}" required>
                                    </div>

                                    <div class="my-3">
                                        <label for="pilihan-gelar-1" class="form-label">{{__("Gelar")}}</label>
                                        <select class="form-select" id="pilihan-gelar-1" name="education_title"
                                            required>
                                            <option selected>{{__("Pilih Gelar")}}</option>
                                            <option value="sma">{{__("SMA/SMK")}}</option>
                                            <option value="diploma_1">{{__("Diploma 1")}}</option>
                                            <option value="diploma_3">{{__("Diploma 3")}}</option>
                                            <option value="sarjana">{{__("Sarjana ")}}</option>
                                            <option value="magister">{{__("Magister ")}}</option>
                                            <option value="doktor">{{__("Doktor ")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="nama-jurusan-1" class="form-label">
                                            {{__("Jurusan")}}
                                            <span>*</span>
                                        </label>
                                        <input type="text" class="form-control" id="nama-jurusan-1" name="major"
                                            aria-describedby="nama-jurusan-1" placeholder="{{__("Ketikan Jurusan")}}" required>
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="">
                                        <label for="tanggal-masuk-1" class="form-label">
                                            {{__("Tanggal Masuk")}}
                                            <span>*</span>
                                        </label>
                                        <input type="date" class="form-control" id="tanggal-masuk-1" name="join_date"
                                            aria-describedby="tanggal-masuk-1" placeholder="" required>
                                    </div>

                                    <div class="my-3">
                                        <label for="tanggal-lulus-1" class="form-label">
                                            {{__("Tanggal Lulus")}}
                                            <span>*</span>
                                        </label>
                                        <input type="date" class="form-control" id="tanggal-lulus-1"
                                            name="graduate_date" aria-describedby="tanggal-lulus-1" placeholder="" required>
                                    </div>

                                    <div class="my-3">
                                        <label for="ipk-1" class="form-label">
                                            {{__("Skor Nilai Akhir/IPK")}} 
                                            <span>*</span>
                                        </label>
                                        <input type="text" class="form-control" id="ipk-1" aria-describedby="ipk-1"
                                            name="gpa" placeholder="{{__("Ketikan Nilai Akhir")}}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        {{__("Data Pendidikan")}} 2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- add input components -->
                        <div class="">
                            <div class="row gx-5 my-4">
                                <div class="col-sm">
                                    <div class="">
                                        <label for="nama-institusi-2" class="form-label">{{__("Nama Institusi")}}</label>
                                        <input type="text" class="form-control" id="nama-institusi-2"
                                            aria-describedby="nama-institusi-2" name="nama-institusi-2"
                                            placeholder="{{__("Ketikan Nama Institusi")}}">
                                    </div>

                                    <div class="my-3">
                                        <label for="pilihan-gelar-2" class="form-label">{{__("Gelar")}}</label>
                                        <select class="form-select" id="pilihan-gelar-2" name="education_title_2">
                                            <option selected>{{__("Pilih Gelar")}}</option>
                                            <option value="sma">{{__("SMA/SMK")}}</option>
                                            <option value="diploma_1">{{__("Diploma 1")}}</option>
                                            <option value="diploma_3">{{__("Diploma 3")}}</option>
                                            <option value="sarjana">{{__("Sarjana ")}}</option>
                                            <option value="magister">{{__("Magister ")}}</option>
                                            <option value="doktor">{{__("Doktor ")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="nama-jurusan-2" class="form-label">{{__("Jurusan")}}</label>
                                        <input type="text" class="form-control" id="nama-jurusan-2" name="major_2"
                                            aria-describedby="nama-jurusan-2" placeholder="{{__("Ketikan Jurusan")}}">
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="">
                                        <label for="tanggal-masuk-2" class="form-label">{{__("Tanggal Masuk")}}</label>
                                        <input type="date" class="form-control" id="tanggal-masuk-2" name="join_date_2"
                                            aria-describedby="tanggal-masuk-2" placeholder="">
                                    </div>

                                    <div class="my-3">
                                        <label for="tanggal-lulus-2" class="form-label">{{__("Tanggal Lulus")}}</label>
                                        <input type="date" class="form-control" id="tanggal-lulus-2"
                                            name="graduate_date_2" aria-describedby="tanggal-lulus-2" placeholder="">
                                    </div>

                                    <div class="my-3">
                                        <label for="ipk-2" class="form-label">{{__("Skor Nilai Akhir/IPK")}}</label>
                                        <input type="number" class="form-control" id="ipk-2" aria-describedby="ipk-2"
                                            name="gpa_2" placeholder="{{__("Ketikan Nilai Akhir")}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        {{__("Data Pendidikan")}} 3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- add input components -->
                        <div class="">
                            <div class="row gx-5 my-4">
                                <div class="col-sm">
                                    <div class="">
                                        <label for="nama-institusi-3" class="form-label">{{__("Nama Institusi")}}</label>
                                        <input type="text" class="form-control" id="nama-institusi-3"
                                            aria-describedby="nama-institusi-3" name="nama-institusi-3"
                                            placeholder="{{__("Ketikan Nama Institusi")}}">
                                    </div>

                                    <div class="my-3">
                                        <label for="pilihan-gelar-3" class="form-label">{{__("Gelar")}}</label>
                                        <select class="form-select" id="pilihan-gelar-3" name="education_title_3">
                                            <option selected>{{__("Pilih Gelar")}}</option>
                                            <option value="sarjana">{{__("Sarjana ")}}</option>
                                            <option value="magister">{{__("Magister ")}}</option>
                                            <option value="doktor">{{__("Doktor ")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="nama-jurusan-1" class="form-label">{{__("Jurusan")}}</label>
                                        <input type="text" class="form-control" id="nama-jurusan-3" name="major_3"
                                            aria-describedby="nama-jurusan-3" placeholder="{{__("Ketikan Jurusan")}}">
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="">
                                        <label for="tanggal-masuk-1" class="form-label">{{__("Tanggal Masuk")}}</label>
                                        <input type="date" class="form-control" id="tanggal-masuk-3" name="join_date_3"
                                            aria-describedby="tanggal-masuk-3" placeholder="">
                                    </div>

                                    <div class="my-3">
                                        <label for="tanggal-lulus-3" class="form-label">{{__("Tanggal Lulus")}}</label>
                                        <input type="date" class="form-control" id="tanggal-lulus-3"
                                            name="graduate_date_3" aria-describedby="tanggal-lulus-3" placeholder="">
                                    </div>

                                    <div class="my-3">
                                        <label for="ipk-3" class="form-label">{{__("Skor Nilai Akhir/IPK")}}</label>
                                        <input type="number" class="form-control" id="ipk-3" aria-describedby="ipk-3"
                                            name="gpa_3" placeholder="{{__("Ketikan Nilai Akhir")}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- col-2 -->
    <div class="mt-5 mb-4">
        <h3 class="common-bold mb-1">{{__("Data Pengalaman Organisasi")}}</h3>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwoOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwoOne" aria-expanded="true" aria-controls="collapseTwoOne">
                        {{__("Data Pengalaman Organisasi")}} 1
                    </button>
                </h2>
                <div id="collapseTwoOne" class="accordion-collapse collapse show" aria-labelledby="headingTwoOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- add input components -->
                        <div class="">
                            <div class="row gx-5 my-4">
                                <div class="col-sm">
                                    <div class="">
                                        <label for="nama-organisasi-1"
                                            class="form-label">{{__("Nama Organisasi")}}</label>
                                        <input type="text" class="form-control" id="nama-organisasi-1"
                                            name="organization_name" aria-describedby="nama-organisasi-1"
                                            placeholder="{{__("Ketikan Nama Organisasi")}}">
                                    </div>

                                    <div class="my-3">
                                        <label for="bidang-kegiatan-1"
                                            class="form-label">{{__("Bidang Kegiatan")}}</label>
                                        <input type="text" class="form-control" id="bidang-kegiatan-1"
                                            name="organization_activity" aria-describedby="bidang-kegiatan-1"
                                            placeholder="{{__("Ketikan Bidang Kegiatan")}}">
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="">
                                        <label for="posisi-organisasi-1"
                                            class="form-label">{{__("Posisi Dalam Organisasi")}}</label>
                                        <input type="text" class="form-control" id="posisi-organisasi-1"
                                            name="organization_position" aria-describedby="posisi-organisasi-1"
                                            placeholder="{{__("Ketikan Posisi Organisasi")}}">
                                    </div>

                                    <div class="my-3">
                                        <label for="tahun-1" class="form-label">{{__("Tahun")}}</label>
                                        <input type="text" class="form-control" id="tahun-1" aria-describedby="tahun-1"
                                            name="organization_year" placeholder="{{__("Ketikan Tahun")}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwoTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwoTwo" aria-expanded="false" aria-controls="collapseTwoTwo">
                        {{__("Data Pengalaman Organisasi")}} 2
                    </button>
                </h2>
                <div id="collapseTwoTwo" class="accordion-collapse collapse" aria-labelledby="headingTwoTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- add input components -->
                        <div class="">
                            <div class="row gx-5 my-4">
                                <div class="col-sm">
                                    <div class="">
                                        <label for="nama-organisasi-2"
                                            class="form-label">{{__("Ketikan Nama Organisasi")}}</label>
                                        <input type="text" class="form-control" id="nama-organisasi-2"
                                            name="organization_name_2" aria-describedby="nama-organisasi-2"
                                            placeholder="{{__("Ketikan Nama Organisasi")}}">
                                    </div>

                                    <div class="my-3">
                                        <label for="bidang-kegiatan-2"
                                            class="form-label">{{__("Bidang Kegiatan")}}</label>
                                        <input type="text" class="form-control" id="bidang-kegiatan-2"
                                            name="organization_activity_2" aria-describedby="bidang-kegiatan-2"
                                            placeholder="{{__("Ketikan Bidang Kegiatan")}}">
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="">
                                        <label for="posisi-organisasi-2"
                                            class="form-label">{{__("Posisi Dalam Organisasi")}}</label>
                                        <input type="text" class="form-control" id="posisi-organisasi-2"
                                            name="organization_position_2" aria-describedby="posisi-organisasi-2"
                                            placeholder="{{__("Ketikan Posisi Organisasi")}}">
                                    </div>

                                    <div class="my-3">
                                        <label for="tahun-1" class="form-label">{{__("Tahun")}}</label>
                                        <input type="text" class="form-control" id="tahun-2" aria-describedby="tahun-2"
                                            name="organization_year_2" placeholder="{{__("Ketikan Tahun")}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwoThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwoThree" aria-expanded="false" aria-controls="collapseTwoThree">
                        {{__("Data Pengalaman Organisasi")}} 3
                    </button>
                </h2>
                <div id="collapseTwoThree" class="accordion-collapse collapse" aria-labelledby="headingTwoThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- add input components -->
                        <div class="">
                            <div class="row gx-5 my-4">
                                <div class="col-sm">
                                    <div class="">
                                        <label for="nama-organisasi-3"
                                            class="form-label">{{__("Ketikan Nama Organisasi")}}</label>
                                        <input type="text" class="form-control" id="nama-organisasi-3"
                                            name="organization_name_3" aria-describedby="nama-organisasi-3"
                                            placeholder="{{__("Ketikan Nama Organisasi")}}">
                                    </div>

                                    <div class="my-3">
                                        <label for="bidang-kegiatan-3"
                                            class="form-label">{{__("Bidang Kegiatan")}}</label>
                                        <input type="text" class="form-control" id="bidang-kegiatan-3"
                                            name="organization_activity_3" aria-describedby="bidang-kegiatan-3"
                                            placeholder="{{__("Ketikan Bidang Kegiatan")}}">
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="">
                                        <label for="posisi-organisasi-3"
                                            class="form-label">{{__("Posisi Dalam Organisasi")}}</label>
                                        <input type="text" class="form-control" id="posisi-organisasi-3"
                                            name="organization_position_3" aria-describedby="posisi-organisasi-3"
                                            placeholder="{{__("Ketikan Posisi Organisasi")}}">
                                    </div>

                                    <div class="my-3">
                                        <label for="tahun-3" class="form-label">{{__("Tahun")}}</label>
                                        <input type="text" class="form-control" id="tahun-3" aria-describedby="tahun-3"
                                            name="organization_year_3" placeholder="{{__("Ketikan Tahun")}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- col-3 -->
    <div class="mt-5 mb-4">
        <h3 class="common-bold mb-1">{{__("Data Pelatihan")}}</h3>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThreeOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThreeOne" aria-expanded="true" aria-controls="collapseThreeOne">
                        {{__("Data Pelatihan")}} 1
                    </button>
                </h2>
                <div id="collapseThreeOne" class="accordion-collapse collapse show" aria-labelledby="headingTwoOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- add input components -->
                        <div class="">
                            <div class="row gx-5 my-4">
                                <div class="col-sm">
                                    <div class="">
                                        <label for="nama-pelatihan-1"
                                            class="form-label">{{__("Nama Pelatihan")}}</label>
                                        <input type="text" class="form-control" id="nama-pelatihan-1"
                                            name="training_name" aria-describedby="nama-pelatihan-1"
                                            placeholder="{{__("Ketikan Nama Pelatihan")}}">
                                    </div>

                                    <div class="my-3">
                                        <label for="tanggal-mulai-1" class="form-label">{{__("Tanggal Mulai")}}</label>
                                        <input type="date" class="form-control" id="tanggal-mulai-1"
                                            name="training_start_date" aria-describedby="tanggal-mulai-1"
                                            placeholder="">
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="">
                                        <label for="tanggal-berakhir-1"
                                            class="form-label">{{__("Tanggal Berakhir")}}</label>
                                        <input type="date" class="form-control" id="tanggal-berakhir-1"
                                            name="training_end_date" aria-describedby="tanggal-berakhir-1"
                                            placeholder="">
                                    </div>

                                    <div class="my-3">
                                        <label for="sertifikasi" class="form-label">{{__("Bersertifikasi")}}</label>
                                        <select class="form-select" id="sertifikasi" name="certificate">
                                            <option selected>{{__("Pilih Salah Satu")}}</option>
                                            <option value="ya">{{__("Ya")}}</option>
                                            <option value="tidak">{{__("Tidak")}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThreeTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThreeTwo" aria-expanded="false" aria-controls="collapseThreeTwo">
                        {{__("Data Pelatihan")}} 2
                    </button>
                </h2>
                <div id="collapseThreeTwo" class="accordion-collapse collapse" aria-labelledby="headingThreeTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- add input components -->
                        <div class="">
                            <div class="row gx-5 my-4">
                                <div class="col-sm">
                                    <div class="">
                                        <label for="nama-pelatihan-2"
                                            class="form-label">{{__("Nama Pelatihan")}}</label>
                                        <input type="text" class="form-control" id="nama-pelatihan-2"
                                            name="training_name_2" aria-describedby="nama-pelatihan-2"
                                            placeholder="{{__("Ketikan Nama Pelatihan")}}">
                                    </div>

                                    <div class="my-3">
                                        <label for="tanggal-mulai-2" class="form-label">{{__("Tanggal Mulai")}}</label>
                                        <input type="date" class="form-control" id="tanggal-mulai-2"
                                            name="training_start_date_2" aria-describedby="tanggal-mulai-2"
                                            placeholder="">
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="">
                                        <label for="tanggal-berakhir-2"
                                            class="form-label">{{__("Tanggal Berakhir")}}</label>
                                        <input type="date" class="form-control" id="tanggal-berakhir-2"
                                            name="training_end_date_2" aria-describedby="tanggal-berakhir-2"
                                            placeholder="">
                                    </div>

                                    <div class="my-3">
                                        <label for="sertifikasi" class="form-label">{{__("Bersertifikasi")}}</label>
                                        <select class="form-select" id="sertifikasi_2" name="certificate_2">
                                            <option selected>{{__("Pilih Salah Satu")}}</option>
                                            <option value="ya">{{__("Ya")}}</option>
                                            <option value="tidak">{{__("Tidak")}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- btn -->
    <div class="row gap-4 p-2">
        <button class="col prev-2 prev btn-prev">{{__("Sebelumnya")}}</button>
        <button class="col next-2 next btns btn-next">{{__("Selanjutnya")}}</button>
    </div>
</div>