<!-- step-2 -->
<div class="px-2 mt-4">
    <!-- col-1 -->
    <div class="mt-1">
        <h3 class="common-bold mb-2">{{__("Data Keluarga")}}</h3>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        {{__("Data Keluarga")}} 1
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
                                        <label for="hubungan-keluarga-1"
                                            class="form-label">{{__("Hubungan Keluarga")}}</label>
                                        <select class="form-select" id="hubungan-keluarga-1" name="family_relationship">
                                            <option value="">{{__("Pilih Hubungan Keluarga")}} </option>
                                            <option value="ayah">{{__("Ayah")}}</option>
                                            <option value="ibu">{{__("Ibu")}}</option>
                                            <option value="kakak">{{__("Kakak")}}</option>
                                            <option value="adik">{{__("Adik")}}</option>
                                            <option value="sepupu">{{__("Sepupu")}}</option>
                                            <option value="lainnya">{{__("Lainnya")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="nama-1" class="form-label">{{__("Nama Lengkap")}}</label>
                                        <input type="text" class="form-control" id="nama-1" aria-describedby="nama-1"
                                            name="family_fullname" placeholder="{{__("Ketikan Nama Lengkap")}}">
                                    </div>

                                    <div class="my-3">
                                        <label for="gender-1" class="form-label">{{__("Pilih Jenis Kelamin")}}</label>
                                        <select class="form-select" id="gender-1" name="family_gender">
                                            <option selected>{{__("Pilih Jenis Kelamin")}} </option>
                                            <option value="pria">{{__("Pria")}}</option>
                                            <option value="wanita">{{__("Wanita")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="tanggal-lahir-1"
                                            class="form-label">{{__("Pilih Tanggal Lahir")}}</label>
                                        <input type="date" class="form-control" id="tanggal-lahir-1"
                                            aria-describedby="tanggal-lahir-1" name="family_dob" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="">
                                        <label for="pendidikan-terakhir-1"
                                            class="form-label">{{__("Pendidikan Terakhir")}}</label>
                                        <select class="form-select" id="pendidikan-terakhir-1" name="family_education">
                                            <option selected>{{__("Pilih Pendidikan Terakhir")}}</option>
                                            <option value="sma">{{__("SMA/SMK")}}</option>
                                            <option value="diploma_1">{{__("Diploma 1")}}</option>
                                            <option value="diploma_3">{{__("Diploma 3")}}</option>
                                            <option value="sarjana">{{__("Sarjana")}}</option>
                                            <option value="magister">{{__("Magister")}}</option>
                                            <option value="doktor">{{__("Doktor")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="pekerjaan-terakhir-1"
                                            class="form-label">{{__("Pekerjaan Terakhir")}}</label>
                                        <select class="form-select" id="pekerjaan-terakhir-1" name="family_last_job">
                                            <option selected>{{__("Pilih Pekerjaan Terakhir")}}</option>
                                            <option value="belum_tidak_bekerja">{{__("BELUM/TIDAK BEKERJA")}}</option>
                                            <option value="mengurus_rumah_tangga">{{__("MENGURUS RUMAH TANGGA")}}
                                            </option>
                                            <option value="pelajar">{{__("PELAJAR/MAHASISWA")}}</option>
                                            <option value="pns">{{__("PEGAWAI NEGERI SIPIL")}}</option>
                                            <option value="karyawan_swasta">{{__("KARYAWAN SWASTA")}}</option>
                                            <option value="karyawan_bumn">{{__("KARYAWAN BUMN")}}</option>
                                            <option value="karyawan_bumd">{{__("KARYAWAN BUMD")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="alamat-1" class="form-label">{{__("Alamat")}}</label>
                                        <textarea class="form-control" placeholder="{{__("Ketikan Alamat ")}}"
                                            name='family_address' id="alamat-1"></textarea>
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
                        {{__("Data Keluarga")}} 2
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
                                        <label for="hubungan-keluarga-2"
                                            class="form-label">{{__("Hubungan Keluarga")}}</label>
                                        <select class="form-select" id="hubungan-keluarga-2"
                                            name="family_relationship_2">
                                            <option value="">{{__("Pilih Hubungan Keluarga")}} </option>
                                            <option value="ayah">{{__("Ayah")}}</option>
                                            <option value="ibu">{{__("Ibu")}}</option>
                                            <option value="kakak">{{__("Kakak")}}</option>
                                            <option value="adik">{{__("Adik")}}</option>
                                            <option value="sepupu">{{__("Sepupu")}}</option>
                                            <option value="lainnya">{{__("Lainnya")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="nama-2" class="form-label">{{__("Nama Lengkap")}}</label>
                                        <input type="text" class="form-control" id="nama-2" aria-describedby="nama-2"
                                            placeholder="{{__("Ketikan Nama Lengkap")}}" name="family_fullname_2">
                                    </div>

                                    <div class="my-3">
                                        <label for="gender-2" class="form-label">{{__("Pilih Jenis Kelamin")}}</label>
                                        <select class="form-select" id="gender-2" name="family_gender_2">
                                            <option selected>{{__("Pilih Jenis Kelamin")}} </option>
                                            <option value="pria">{{__("Pria")}}</option>
                                            <option value="wanita">{{__("Wanita")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="tanggal-lahir-2"
                                            class="form-label">{{__("Pilih Tanggal Lahir")}}</label>
                                        <input type="date" class="form-control" id="tanggal-lahir-2"
                                            aria-describedby="tanggal-lahir-2" name="family_dob_2" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="">
                                        <label for="pendidikan-terakhir-2"
                                            class="form-label">{{__("Pendidikan Terakhir")}}</label>
                                        <select class="form-select" id="pendidikan-terakhir-2"
                                            name="family_education_2">
                                            <option selected>{{__("Pilih Pendidikan Terakhir")}}</option>
                                            <option value="sma">{{__("SMA/SMK")}}</option>
                                            <option value="diploma_1">{{__("Diploma 1")}}</option>
                                            <option value="diploma_3">{{__("Diploma 3")}}</option>
                                            <option value="sarjana">{{__("Sarjana")}}</option>
                                            <option value="magister">{{__("Magister")}}</option>
                                            <option value="doktor">{{__("Doktor")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="pekerjaan-terakhir-2"
                                            class="form-label">{{__("Pekerjaan Terakhir")}}</label>
                                        <select class="form-select" id="pekerjaan-terakhir-2" name="family_last_job_2">
                                            <option selected>{{__("Pilih Pekerjaan Terakhir")}}</option>
                                            <option value="belum_tidak_bekerja">{{__("BELUM/TIDAK BEKERJA")}}</option>
                                            <option value="mengurus_rumah_tangga">{{__("MENGURUS RUMAH TANGGA")}}
                                            </option>
                                            <option value="pelajar">{{__("PELAJAR/MAHASISWA")}}</option>
                                            <option value="pns">{{__("PEGAWAI NEGERI SIPIL")}}</option>
                                            <option value="karyawan_swasta">{{__("KARYAWAN SWASTA")}}</option>
                                            <option value="karyawan_bumn">{{__("KARYAWAN BUMN")}}</option>
                                            <option value="karyawan_bumd">{{__("KARYAWAN BUMD")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="alamat-2" class="form-label">{{__("Alamat")}}</label>
                                        <textarea class="form-control" placeholder="{{__("Ketikan Alamat ")}}"
                                            name='family_address_2' id="alamat-2"></textarea>
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
                        {{__("Data Keluarga")}} 3
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
                                        <label for="hubungan-keluarga-3"
                                            class="form-label">{{__("Hubungan Keluarga")}}</label>
                                        <select class="form-select" id="hubungan-keluarga-3"
                                            name="family_relationship_3">
                                            <option value="">{{__("Pilih Hubungan Keluarga")}} </option>
                                            <option value="ayah">{{__("Ayah")}}</option>
                                            <option value="ibu">{{__("Ibu")}}</option>
                                            <option value="kakak">{{__("Kakak")}}</option>
                                            <option value="adik">{{__("Adik")}}</option>
                                            <option value="sepupu">{{__("Sepupu")}}</option>
                                            <option value="lainnya">{{__("Lainnya")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="nama-3" class="form-label">{{__("Nama Lengkap")}}</label>
                                        <input type="text" class="form-control" id="nama-3" name="family_fullname_3"
                                            aria-describedby="nama-3" placeholder="{{__("Ketikan Nama Lengkap")}}">
                                    </div>

                                    <div class="my-3">
                                        <label for="gender-3" class="form-label">{{__("Pilih Jenis Kelamin")}}</label>
                                        <select class="form-select" id="gender-3" name="family_gender_3">
                                            <option selected>{{__("Pilih Jenis Kelamin")}} </option>
                                            <option value="pria">{{__("Pria")}}</option>
                                            <option value="wanita">{{__("Wanita")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="tanggal-lahir-3"
                                            class="form-label">{{__("Pilih Tanggal Lahir")}}</label>
                                        <input type="date" class="form-control" id="tanggal-lahir-3" name="family_dob_3"
                                            aria-describedby="tanggal-lahir-3" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="">
                                        <label for="pendidikan-terakhir-3"
                                            class="form-label">{{__("Pendidikan Terakhir")}}</label>
                                        <select class="form-select" id="pendidikan-terakhir-3"
                                            name="family_education_3">
                                            <option value="">{{__("Pilih Pendidikan Terakhir")}}</option>
                                            <option value="sma">{{__("SMA/SMK")}}</option>
                                            <option value="diploma_1">{{__("Diploma 1")}}</option>
                                            <option value="diploma_3">{{__("Diploma 3")}}</option>
                                            <option value="sarjana">{{__("Sarjana")}}</option>
                                            <option value="magister">{{__("Magister")}}</option>
                                            <option value="doktor">{{__("Doktor")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="pekerjaan-terakhir-3"
                                            class="form-label">{{__("Pekerjaan Terakhir")}}</label>
                                        <select class="form-select" id="pekerjaan-terakhir-3" name="family_last_job_3">
                                            <option selected>{{__("Pilih Pekerjaan Terakhir")}}</option>
                                            <option value="belum_tidak_bekerja">{{__("BELUM/TIDAK BEKERJA")}}</option>
                                            <option value="mengurus_rumah_tangga">{{__("MENGURUS RUMAH TANGGA")}}
                                            </option>
                                            <option value="pelajar">{{__("PELAJAR/MAHASISWA")}}</option>
                                            <option value="pns">{{__("PEGAWAI NEGERI SIPIL")}}</option>
                                            <option value="karyawan_swasta">{{__("KARYAWAN SWASTA")}}</option>
                                            <option value="karyawan_bumn">{{__("KARYAWAN BUMN")}}</option>
                                            <option value="karyawan_bumd">{{__("KARYAWAN BUMD")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="alamat-3" class="form-label">{{__("Alamat")}}</label>
                                        <textarea class="form-control" placeholder="{{__("Ketikan Alamat ")}}"
                                            name='family_address_3' id="alamat-3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        {{__("Data Keluarga")}} 4
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- add input components -->
                        <div class="">
                            <div class="row gx-5 my-4">
                                <div class="col-sm">
                                    <div class="">
                                        <label for="hubungan-keluarga-4"
                                            class="form-label">{{__("Hubungan Keluarga")}}</label>
                                        <select class="form-select" id="hubungan-keluarga-4"
                                            name="family_relationship_4">
                                            <option value="">{{__("Pilih Hubungan Keluarga")}} </option>
                                            <option value="ayah">{{__("Ayah")}}</option>
                                            <option value="ibu">{{__("Ibu")}}</option>
                                            <option value="kakak">{{__("Kakak")}}</option>
                                            <option value="adik">{{__("Adik")}}</option>
                                            <option value="sepupu">{{__("Sepupu")}}</option>
                                            <option value="lainnya">{{__("Lainnya")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="nama-4" class="form-label">{{__("Nama Lengkap")}}</label>
                                        <input type="text" class="form-control" id="nama-4" name="family_fullname_4"
                                            aria-describedby="nama-4" placeholder="{{__("Ketikan Nama Lengkap")}}">
                                    </div>

                                    <div class="my-3">
                                        <label for="gender-4" class="form-label">{{__("Pilih Jenis Kelamin")}}</label>
                                        <select class="form-select" id="gender-4" name="family_gender_4">
                                            <option selected>{{__("Pilih Jenis Kelamin")}} </option>
                                            <option value="pria">{{__("Pria")}}</option>
                                            <option value="wanita">{{__("Wanita")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="tanggal-lahir-4"
                                            class="form-label">{{__("Pilih Tanggal Lahir")}}</label>
                                        <input type="date" class="form-control" id="tanggal-lahir-4" name="family_dob_4"
                                            aria-describedby="tanggal-lahir-4" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="">
                                        <label for="pendidikan-terakhir-4"
                                            class="form-label">{{__("Pendidikan Terakhir")}}</label>
                                        <select class="form-select" id="pendidikan-terakhir-4"
                                            name="family_education_4">
                                            <option selected>{{__("Pilih Pendidikan Terakhir")}}</option>
                                            <option value="sma">{{__("SMA/SMK")}}</option>
                                            <option value="diploma_1">{{__("Diploma 1")}}</option>
                                            <option value="diploma_3">{{__("Diploma 3")}}</option>
                                            <option value="sarjana">{{__("Sarjana")}}</option>
                                            <option value="magister">{{__("Magister")}}</option>
                                            <option value="doktor">{{__("Doktor")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="pekerjaan-terakhir-4"
                                            class="form-label">{{__("Pekerjaan Terakhir")}}</label>
                                        <select class="form-select" id="pekerjaan-terakhir-4" name="family_last_job_4">
                                            <option selected>{{__("Pilih Pekerjaan Terakhir")}}</option>
                                            <option value="belum_tidak_bekerja">{{__("BELUM/TIDAK BEKERJA")}}</option>
                                            <option value="mengurus_rumah_tangga">{{__("MENGURUS RUMAH TANGGA")}}
                                            </option>
                                            <option value="pelajar">{{__("PELAJAR/MAHASISWA")}}</option>
                                            <option value="pns">{{__("PEGAWAI NEGERI SIPIL")}}</option>
                                            <option value="karyawan_swasta">{{__("KARYAWAN SWASTA")}}</option>
                                            <option value="karyawan_bumn">{{__("KARYAWAN BUMN")}}</option>
                                            <option value="karyawan_bumd">{{__("KARYAWAN BUMD")}}</option>
                                        </select>
                                    </div>


                                    <div class="my-3">
                                        <label for="alamat-4" class="form-label">{{__("Alamat")}}</label>
                                        <textarea class="form-control" placeholder="{{__("Ketikan Alamat ")}}"
                                            name='family_address_4' id="alamat-4"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        {{__("Data Keluarga")}} 5
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- add input components -->
                        <div class="">
                            <div class="row gx-5 my-4">
                                <div class="col-sm">
                                    <div class="">
                                        <label for="hubungan-keluarga-5"
                                            class="form-label">{{__("Hubungan Keluarga")}}</label>
                                        <select class="form-select" id="hubungan-keluarga-5"
                                            name="family_relationship_5">
                                            <option value="">{{__("Pilih Hubungan Keluarga")}} </option>
                                            <option value="ayah">{{__("Ayah")}}</option>
                                            <option value="ibu">{{__("Ibu")}}</option>
                                            <option value="kakak">{{__("Kakak")}}</option>
                                            <option value="adik">{{__("Adik")}}</option>
                                            <option value="sepupu">{{__("Sepupu")}}</option>
                                            <option value="lainnya">{{__("Lainnya")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="nama-5" class="form-label">{{__("Nama Lengkap")}}</label>
                                        <input type="text" class="form-control" id="nama-5" name="family_fullname_5"
                                            aria-describedby="nama-5" placeholder="{{__("Ketikan Nama Lengkap")}}">
                                    </div>

                                    <div class="my-3">
                                        <label for="gender-5" class="form-label">{{__("Pilih Jenis Kelamin")}}</label>
                                        <select class="form-select" id="gender-5" name="family_gender_5">
                                            <option selected>{{__("Pilih Jenis Kelamin")}} </option>
                                            <option value="pria">{{__("Pria")}}</option>
                                            <option value="wanita">{{__("Wanita")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="tanggal-lahir-5"
                                            class="form-label">{{__("Pilih Tanggal Lahir")}}</label>
                                        <input type="date" class="form-control" name="family_dob_5" id="tanggal-lahir-5"
                                            aria-describedby="tanggal-lahir-5" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="">
                                        <label for="pendidikan-terakhir-5"
                                            class="form-label">{{__("Pendidikan Terakhir")}}</label>
                                        <select class="form-select" id="pendidikan-terakhir-5"
                                            name="family_education_5">
                                            <option selected>{{__("Pilih Pendidikan Terakhir")}}</option>
                                            <option value="sma">{{("SMA/SMK")}}</option>
                                            <option value="diploma_1">{{__("Diploma 1")}}</option>
                                            <option value="diploma_3">{{__("Diploma 3")}}</option>
                                            <option value="sarjana">{{__("Sarjana")}}</option>
                                            <option value="magister">{{__("Magister")}}</option>
                                            <option value="doktor">{{__("Doktor")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="pekerjaan-terakhir-5"
                                            class="form-label">{{__("Pekerjaan Terakhir")}}</label>
                                        <select class="form-select" id="pekerjaan-terakhir-5" name="family_last_job_5">
                                            <option selected>{{__("Pilih Pekerjaan Terakhir")}}</option>
                                            <option value="belum_tidak_bekerja">{{__("BELUM/TIDAK BEKERJA")}}</option>
                                            <option value="mengurus_rumah_tangga">{{__("MENGURUS RUMAH TANGGA")}}
                                            </option>
                                            <option value="pelajar">{{__("PELAJAR/MAHASISWA")}}</option>
                                            <option value="pns">{{__("PEGAWAI NEGERI SIPIL")}}</option>
                                            <option value="karyawan_swasta">{{__("KARYAWAN SWASTA")}}</option>
                                            <option value="karyawan_bumn">{{__("KARYAWAN BUMN")}}</option>
                                            <option value="karyawan_bumd">{{__("KARYAWAN BUMD")}}</option>
                                        </select>
                                    </div>

                                    <div class="my-3">
                                        <label for="alamat-5" class="form-label">{{__("Alamat")}}</label>
                                        <textarea class="form-control" placeholder="{{__("Ketikan Alamat ")}}"
                                            name='family_address_5' id="alamat-5"></textarea>
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
        <h3 class="common-bold mb-1">{{__("Data Kontak Darurat")}}</h3>
        <div class="row gx-5 my-4">
            <div class="col-sm">
                <div class="">
                    <label for="name-darurat" class="form-label">
                        {{__("Nama Lengkap")}}
                        <span>*</span>
                    </label>
                    <input type="text" class="form-control" id="name-darurat" aria-describedby="name-darurat"
                        name="emergency_fullname" placeholder="{{__("Ketikan Nama Lengkap")}}" required>
                </div>

                <div class="my-3">
                    <label for="alamat-darurat" class="form-label">
                        {{__("Alamat")}}
                        <span>*</span>
                    </label>
                    <textarea class="form-control" placeholder="{{__("Ketikan Alamat Kontak Darurat Anda")}}"
                        name='emergency_address' id="alamat-darurat" required></textarea>
                </div>

                <div class="my-3">
                    <label for="phone-darurat" class="form-label">
                        {{__("Nomor Telepon")}}
                        <span>*</span>
                    </label>
                    <input type="number" class="form-control" id="phone-darurat" aria-describedby="phone-darurat"
                        name="emergency_phone" placeholder="{{__("Ketikan Nomor Telepon")}}" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="">
                    <label for="pekerjaan-darurat" class="form-label">
                        {{__("Pekerjaan")}}
                        <span>*</span>
                    </label>
                    <input type="text" class="form-control" id="pekerjaan-darurat" aria-describedby="pekerjaan-darurat"
                        name="emergency_job" placeholder="{{__("Ketikan Pekerjaan")}}" required>
                </div>

                <div class="my-3">
                    <label for="hubungan-darurat" class="form-label">
                        {{__("Hubungan")}}
                        <span>*</span>
                    </label>
                    <input type="text" class="form-control" id="hubungan-darurat" aria-describedby="hubungan-darurat"
                        name="emergency_relationship" placeholder="{{__("Ketikan Hubungan")}}" required>
                </div>
            </div>
        </div>
    </div>
    <!-- btn -->
    <div class="row gap-4 p-2">
        <button class="col prev-1 prev btn-prev">{{__("Sebelumnya")}}</button>
        <button class="col next-1 next btns btn-next">{{__("Selanjutnya")}}</button>
    </div>
</div>
