<!-- step-4 -->
<div class="px-2 mt-4">
    <!-- col-1 -->
    <div class="mt-1">
        <h3 class="common-bold mb-2">{{__("Data Pekerjaan Yang Dilamar")}}</h3>
        <div class="">
            <div class="row gx-5 my-4">
                @php
                $job_id = request()->get('id') ? request()->get('id') : null;
                $job_name = null;
                $job_location = null;

                if($job_id) {
                $job = \App\Models\Job::find( $job_id );
                if($job) {
                $job_name = $job->name;
                $job_location = $job->location;
                }
                }
                @endphp
                <div class="col-sm">
                    <div class="">
                        <label for="nama-pekerjaan" class="form-label">
                            {{__("Pekerjaan Yang Dilamar")}}
                            <span>*</span>
                        </label>
                        <input type="text" class="form-control" id="nama-pekerjaan" name="job_application"
                            aria-describedby="nama-pekerjaan" value="{{ $job_name }}" readonly>
                    </div>

                    <div class="my-3">
                        <label for="lokasi-pekerjaan" class="form-label">
                            {{__("Lokasi Kerja")}}
                            <span>*</span>
                        </label>
                        <input type="text" class="form-control" id="lokasi-pekerjaan"
                            aria-describedby="lokasi-pekerjaan" name="job_location" value="{{ $job_location }}"
                            readonly>
                    </div>

                    <div class="my-3">
                        <label for="ketersediaan-kerja" class="form-label">
                            {{__("Ketersediaan")}}
                            <span>*</span>
                        </label>
                        <select class="form-select" id="ketersediaan-kerja" name="job_availability" required>
                            <option selected>{{__("Pilih Ketersediaan Anda")}}</option>
                            <option value="1">{{__("Secepatnya")}}</option>
                            <option value="2">{{__("1 Bulan")}}</option>
                            <option value="3">{{__("2 Bulan")}}</option>
                            <option value="4">{{__("3 Bulan")}}</option>
                        </select>
                    </div>

                </div>

                <div class="col-sm">
                    <div class="">
                        <label for="info-lowongan" class="form-label">
                            {{__("Info Lowongan")}}
                            <span>*</span>
                        </label>
                        <select class="form-select" id="info-lowongan" name="vacancies" required>
                            <option selected>{{__("Pilih Info Lowongan")}}</option>
                            <option value="1">{{__("Website Autopedia")}}</option>
                            <option value="2">{{__("Portal Job Online")}}</option>
                            <option value="3">{{__("Karyawan Internal")}}</option>
                            <option value="4">{{__("LinkedIn")}}</option>
                            <option value="5">{{__("Instagram")}}</option>
                            <option value="6">{{__("Facebook")}}</option>
                            <option value="7">{{__("Penerimaan Kampus")}}</option>
                            <option value="8"> {{__("Social Media Lainnya")}}</option>
                            <option value="9">{{__("Website ASSA")}}</option>
                            <option value="10">{{__("Website Triputra")}}</option>
                        </select>
                    </div>

                    <div class="my-3">
                        <label for="ekspektasi-gaji" class="form-label">
                            {{__("Ekspektasi Gaji")}}
                            <span>*</span>
                        </label>
                        <input type="text" class="form-control" id="ekspektasi-gaji" name="salary_expectations"
                            aria-describedby="ekspektasi-gaji" placeholder="{{__("Ketikan Ekspektasi Gaji Anda")}}"
                            required>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- col-2 -->
    <div class="mt-5 mb-4">
        <h3 class="common-bold mb-1">{{__("Data Pengalaman Kerja")}}</h3>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwoOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwoOne" aria-expanded="true" aria-controls="collapseTwoOne">
                        {{__("Data Pengalaman Kerja")}} 1
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
                                        <label for="nama-perusahaan-1"
                                            class="form-label">{{__("Nama Perusahaan")}}</label>
                                        <input type="text" class="form-control" id="nama-perusahaan-1"
                                            name="company_name_experience" aria-describedby="nama-perusahaan-1"
                                            placeholder="{{__("Ketikan Nama Perusahaan")}}">
                                    </div>

                                    <div class="my-3">
                                        <label for="masuk-1" class="form-label">{{__("Tanggal Masuk")}}</label>
                                        <input type="date" class="form-control" id="masuk-1"
                                            name="date_of_entry_experience" aria-describedby="masuk-1" placeholder="">
                                    </div>

                                    <div class="my-3">
                                        <label for="keluar-1" class="form-label" id="label-keluar-1">{{__("Tanggal Keluar")}}</label>
                                        <input type="date" class="form-control" id="keluar-1"
                                            name="date_of_out_experience" aria-describedby="keluar-1" placeholder="">
                                    </div>

                                    <div class="my-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="masih-bekerja-1"
                                                name="is_still_working_experience">
                                            <label class="form-check-label" for="masih-bekerja-1">
                                                {{__("Masih Bekerja")}}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="">
                                        <label for="jabatan-1" class="form-label">{{__("Jabatan")}}</label>
                                        <input type="text" class="form-control" id="jabatan-1"
                                            aria-describedby="jabatan-1" name="position_of_experience"
                                            placeholder="{{__("Ketikan Jabatan")}}">
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="">
                                        <label for="deskripsi-kerja-1" class="form-label">{{__("Deskripsi")}}</label>
                                        <textarea class="form-control"
                                            placeholder="{{__("Ketikan Deskripsi Pekerjaan")}}" id="deskripsi-kerja-1"
                                            name="description_of_experience"></textarea>
                                    </div>

                                    <div class="my-3">
                                        <label for="alasan-keluar-1" class="form-label">{{__("Alasan")}}</label>
                                        <textarea class="form-control"
                                            placeholder="{{__("Ketikan Alasan Anda Keluar")}}" id="alasan-keluar-1"
                                            name="reason_out_experience"></textarea>

                                    </div>

                                    <div class="my-3">
                                        <label for="gaji-1" class="form-label">{{__("Gaji Terakhir")}}</label>
                                        <input type="text" class="form-control" id="gaji-1" aria-describedby="gaji-1"
                                            placeholder="{{__("Ketikan Gaji Terakhir")}}"
                                            name="last_sallary_experience">
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
                        {{__("Data Pengalaman Kerja")}} 2
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
                                        <label for="nama-perusahaan-2"
                                            class="form-label">{{__("Nama Perusahaan")}}</label>
                                        <input type="text" class="form-control" id="nama-perusahaan-2"
                                            name="company_name_experience_2" aria-describedby="nama-perusahaan-2"
                                            placeholder="">
                                    </div>

                                    <div class="my-3">
                                        <label for="masuk-2" class="form-label">{{__("Tanggal Masuk")}}</label>
                                        <input type="date" class="form-control" id="masuk-2"
                                            name="date_of_entry_experience_2" aria-describedby="masuk-2" placeholder="">
                                    </div>

                                    <div class="my-3">
                                        <label for="keluar-2" class="form-label" id="label-keluar-2">{{__("Tanggal Keluar")}}</label>
                                        <input type="date" class="form-control" id="keluar-2"
                                            name="date_of_out_experience_2" aria-describedby="keluar-2" placeholder="">
                                    </div>

                                    <div class="my-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="masih-bekerja-2"
                                                name="is_still_working_experience_2">
                                            <label class="form-check-label" for="masih-bekerja-2">
                                                {{__("Masih Bekerja")}}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="">
                                        <label for="jabatan-2" class="form-label">{{__("Jabatan")}}</label>
                                        <input type="text" class="form-control" id="jabatan-2"
                                            aria-describedby="jabatan-2" name="position_of_experience_2" placeholder="">
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="">
                                        <label for="deskripsi-kerja-2" class="form-label">{{__("Deskripsi")}}</label>
                                        <textarea class="form-control"
                                            placeholder="{{__("Ketikan Deskripsi Pekerjaan")}}" id="deskripsi-kerja-2"
                                            name="description_of_experience_2"></textarea>
                                    </div>

                                    <div class="my-3">
                                        <label for="alasan-keluar-1" class="form-label">{{__("Alasan")}}</label>
                                        <textarea class="form-control"
                                            placeholder="{{__("Ketikan Alasan Anda Keluar")}}" id="alasan-keluar-2"
                                            name="reason_out_experience_2"></textarea>
                                    </div>

                                    <div class="my-3">
                                        <label for="gaji-2" class="form-label">{{__("Gaji Terakhir")}}</label>
                                        <input type="text" class="form-control" id="gaji-2" aria-describedby="gaji-2"
                                            placeholder="{{__("Ketikan Gaji Terakhir")}}"
                                            name="last_sallary_experience_2">
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
                        {{__("Data Pengalaman Kerja")}} 3
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
                                        <label for="nama-perusahaan-3"
                                            class="form-label">{{__("Nama Perusahaan")}}</label>
                                        <input type="text" class="form-control" id="nama-perusahaan-3"
                                            name="company_name_experience_3" aria-describedby="nama-perusahaan-3"
                                            placeholder="">
                                    </div>

                                    <div class="my-3">
                                        <label for="masuk-3" class="form-label">{{__("Tanggal Masuk")}}</label>
                                        <input type="date" class="form-control" id="masuk-3"
                                            name="date_of_entry_experience_3" aria-describedby="masuk-3" placeholder="">
                                    </div>

                                    <div class="my-3">
                                        <label for="keluar-3" class="form-label" id="label-keluar-3">{{__("Tanggal Keluar")}}</label>
                                        <input type="date" class="form-control" id="keluar-3"
                                            name="date_of_out_experience_3" aria-describedby="keluar-3" placeholder="">
                                    </div>

                                    <div class="my-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="masih-bekerja-3"
                                                name="is_still_working_experience_3">
                                            <label class="form-check-label" for="masih-bekerja-3">
                                                {{__("Masih Bekerja")}}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="">
                                        <label for="jabatan-3" class="form-label">{{__("Jabatan")}}</label>
                                        <input type="text" class="form-control" id="jabatan-3"
                                            aria-describedby="jabatan-3" name="position_of_experience_3" placeholder="">
                                    </div>
                                </div>

                                <div class="col-sm">
                                    <div class="">
                                        <label for="deskripsi-kerja-3" class="form-label">{{__("Deskripsi")}}</label>
                                        <textarea class="form-control"
                                            placeholder="{{__("Ketikan Deskripsi Pekerjaan")}}" id="deskripsi-kerja-3"
                                            name="description_of_experience_3"></textarea>
                                    </div>

                                    <div class="my-3">
                                        <label for="alasan-keluar-3" class="form-label">{{__("Alasan")}}</label>
                                        <textarea class="form-control"
                                            placeholder="{{__("Ketikan Alasan Anda Keluar")}}" id="alasan-keluar-3"
                                            name="reason_out_experience_3"></textarea>

                                    </div>

                                    <div class="my-3">
                                        <label for="gaji-2" class="form-label">{{__("Gaji Terakhir")}}</label>
                                        <input type="text" class="form-control" id="gaji-3" aria-describedby="gaji-3"
                                            placeholder="{{__("Ketikan Gaji Terakhir")}}"
                                            name="last_sallary_experience_3">
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
        <h3 class="common-bold mb-1">{{__("Referensi")}}</h3>
        <div class="">
            <div class="row gx-5 mt-2 mb-4">
                <div class="col-sm">
                    <div class="">
                        <label for="nama-referensi" class="form-label">
                            {{__("Nama Lengkap Referensi")}}
                            <span>*</span>
                        </label>
                        <input type="text" class="form-control" id="nama-referensi" name="reference_name"
                            aria-describedby="nama-referensi" placeholder="{{__("Ketikan Nama Lengkap Referensi")}}"
                            required>
                    </div>

                    <div class="my-3">
                        <label for="alamat-referensi" class="form-label">
                            {{__("Alamat Referensi")}}
                            <span>*</span>
                        </label>
                        <textarea class="form-control" placeholder="Ketikan Alamat" id="alamat-referensi"
                            name="reference_address" required></textarea>
                    </div>

                    <div class="my-3">
                        <label for="nomor-referensi" class="form-label">
                            {{__("Nomor Telepon Referensi")}}
                            <span>*</span>
                        </label>
                        <input type="number" class="form-control" id="nomor-referensi"
                            aria-describedby="nomor-referensi" name="reference_phone"
                            placeholder="{{__("Ketikan Nomor Telepon Referensi")}}" required>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="">
                        <label for="jabatan-referensi" class="form-label">
                            {{__("Jabatan Referensi")}}
                            <span>*</span>
                        </label>
                        <input type="text" class="form-control" id="jabatan-referensi"
                            aria-describedby="jabatan-referensi" name="reference_position"
                            placeholder="{{__("Ketikan Jabatan")}}" required>
                    </div>

                    <div class="my-3">
                        <label for="hubungan-referensi" class="form-label">
                            {{__("Hubungan Dengan Referensi")}}
                            <span>*</span>
                        </label>
                        <input type="text" class="form-control" id="hubungan-referensi"
                            aria-describedby="hubungan-referensi" name="reference_relationship"
                            placeholder="{{__("Ketikan Hubungan")}}" required>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- btn -->
    <div class="row gap-4 p-2">
        <button class="col prev-3 prev btn-prev">{{__("Sebelumnya")}}</button>
        <button class="col next-3 next btns btn-next">{{__("Selanjutnya")}}</button>
    </div>
</div>