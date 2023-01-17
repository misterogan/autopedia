<!-- step 1 -->
<div class="px-2 mt-4">
    <!-- col-1 -->
    <div class="mb-4">
        <h3 class="common-bold">{{__("Data Personal")}}</h3>
        <div class="row gx-5 my-2">
            <div class="col-sm">
                <div class="my-3">
                    <label for="id-card" class="form-label">
                        ID Card No. (KTP / SIM)
                        <span>*</span>
                    </label>
                    <input type="number" class="form-control" id="id-card" aria-describedby="id-card" name="id_card"
                        placeholder="{{__("Contoh: 320120xxxxxxxx")}}" required>
                    {{-- <small class="invalid-feedback fw-bold">
                                    Please fill a required field
                                </small> --}}
                </div>

                <div class="my-3">
                    <label for="name" class="form-label">
                        {{__("Nama Lengkap")}}
                        <span>*</span>
                    </label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name="employee_name"
                        placeholder="{{__("Ketikan Nama Lengkap")}}" required>
                </div>

                <div class="my-3">
                    <label for="tanggal-lahir" class="form-label">
                        {{__("Tanggal Lahir")}}
                        <span>*</span>
                    </label>
                    <input type="date" class="form-control" id="tanggal-lahir" aria-describedby="tanggal-lahir"
                        name="dob" placeholder="" required>
                </div>

                <div class="my-3">
                    <label for="tempat-lahir" class="form-label">
                        {{__("Tempat Lahir")}}
                        <span>*</span>
                    </label>
                    <input type="text" class="form-control" id="tempat-lahir" aria-describedby="tempat-lahir" name="pob"
                        placeholder="{{__("Ketikan Tempat Lahir Anda")}}" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="my-3">
                    <label for="jenis-kelamin" class="form-label">
                        {{__("Jenis Kelamin")}}
                        <span>*</span>
                    </label>
                    <select class="form-select form-control" id="jenis-kelamin" name="gender" required>
                        <option value="">{{__("Pilih Jenis Kelamin")}}</option>
                        <option value="pria">{{__("Pria")}}</option>
                        <option value="wanita">{{__("Wanita")}}</option>
                    </select>
                </div>

                <div class="my-3">
                    <label for="status" class="form-label">
                        {{__("Status")}}
                        <span>*</span>
                    </label>
                    <select class="form-select form-control" id="status" name="marital_status" required>
                        <option value="">{{__("Pilih Status Anda")}}</option>
                        <option value="belum_menikah">{{__("Lajang")}}</option>
                        <option value="menikah">{{__("Menikah")}}</option>
                        <option value="menikah">{{__("Bercerai")}}</option>
                    </select>
                </div>

                <div class="my-3">
                    <label for="agama" class="form-label">
                        {{__("Agama")}}
                        <span>*</span>
                    </label>
                    <select class="form-select form-control" id="religion" name="religion" required>
                        <option value="">{{__("Pilih Agama Anda")}}</option>
                        <option value="bundha">{{__("Buddha")}}</option>
                        <option value="hindu">{{__("Hindu")}}</option>
                        <option value="islam">{{__("Islam")}}</option>
                        <option value="konghucu">{{__("Konghucu")}}</option>
                        <option value="katolik">{{__("Katolik")}}</option>
                        <option value="kristen">{{__("Kristen Protestan")}}</option>
                    </select>
                </div>

                <div class="my-3">
                    <label for="pendidikan-terakhir" class="form-label">
                        {{__("Pendidikan Terakhir")}}
                        <span>*</span>
                    </label>
                    <select class="form-select form-control" id="pendidikan-terakhir" name="education" required>
                        <option value="">{{__("Pilih Pendidikan Terakhir Anda")}} </option>
                        <option value="sma">{{__("SMA/SMK")}}</option>
                        <option value="diploma_1">{{__("Diploma 1")}}</option>
                        <option value="diploma_3">{{__("Diploma 3")}}</option>
                        <option value="sarjana">{{__("Sarjana")}}</option>
                        <option value="magister">{{__("Magister")}}</option>
                        <option value="doktor">{{__("Doktor")}}</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- col-2 -->
    <div class="mt-5 mb-4">
        <h3 class="common-bold">{{__("Data Alamat")}}</h3>
        <div class="row gx-5 my-3">
            <div class="col-sm">
                <label for="alamat" class="form-label">
                    {{__("Alamat")}}
                    <span>*</span>
                </label>
                <textarea class="form-control" placeholder="{{__("Ketikan Alamat ")}}" id="alamat" name="address"
                    required></textarea>
                <div class="my-3">
                    <label for="kota" class="form-label">
                        {{__("Kota")}}
                        <span>*</span>
                    </label>
                    <input type="text" class="form-control" id="kota" aria-describedby="kota"
                        placeholder="{{__("Ketikan Kota Tempat Tinggal Anda")}}" name="cities" required>
                </div>

                <div class="my-3">
                    <label for="provinsi" class="form-label">
                        {{__("Provinsi")}}
                        <span>*</span>
                    </label>
                    <input type="text" class="form-control" id="provinsi" aria-describedby="provinsi"
                        placeholder="{{__("Ketikan Provinsi Tempat Tinggal Anda")}}" name="province" required>
                </div>

                <div class="my-3">
                    <label for="negara" class="form-label">
                        {{__("Negara")}}
                        <span>*</span>
                    </label>
                    <input type="text" class="form-control" id="negara" aria-describedby="negara"
                        placeholder="{{__("Ketikan Negara Tempat Tinggal Anda")}}" name="country" required>
                </div>

                <div class="my-3">
                    <label for="phone" class="form-label">
                        {{__("Nomor Telepon")}}
                        <span>*</span>
                    </label>
                    <input type="number" class="form-control" id="phone" aria-describedby="phone"
                        placeholder="{{__("Ketikan Nomor Telepon Anda")}}" name="phone_number" required>
                </div>
            </div>
            <div class="col-sm">
                <div class="">
                    <label for="email" class="form-label">
                        {{__("Email")}}
                        <span>*</span>
                    </label>
                    <input type="email" class="form-control" id="email" aria-describedby="email"
                        placeholder="{{__("Ketikan Email Anda")}}" name="email" required>
                </div>

                <div class="my-3">
                    <label for="instagram" class="form-label">{{__("Instagram")}} ID</label>
                    <input type="text" class="form-control" id="instagram" aria-describedby="instagram"
                        name="ig_account" placeholder="{{__("Ketikan ID Instagram Anda")}}">
                </div>

                <div class="my-3">
                    <label for="linkedin" class="form-label">{{__("LinkedIn")}} ID</label>
                    <input type="text" class="form-control" id="linkedin" aria-describedby="linkedin"
                        name="linked_account" placeholder="{{__("Ketikan ID LinkedIn Anda")}}">
                </div>

                <div class="my-3">
                    <label for="facebook" class="form-label">{{__("Facebook")}} ID</label>
                    <input type="text" class="form-control" id="facebook" aria-describedby="facebook" name="fb_account"
                        placeholder="{{__("Ketikan ID Facebook Anda")}}">
                </div>

                <div class="my-3">
                    <label for="twitter" class="form-label">{{__("Twitter")}} ID</label>
                    <input type="text" class="form-control" id="twitter" aria-describedby="twitter"
                        name="twitter_account" placeholder="{{__("Ketikan ID Twitter Anda")}}">
                </div>
            </div>
        </div>
    </div>
    <div class="mb-2">
        <button class="btns firstNext next btn-next ml-auto">{{__("Selanjutnya")}}</button>
    </div>
</div>