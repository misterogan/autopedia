<!-- step-5 -->
<div class="px-2 mt-4">
    <!-- col-1 -->
    <div class="mt-1">
        <h3 class="common-bold mb-3">{{__("Informasi Tambahan")}}</h3>
        <div class="d-md-flex flex-md-row justify-content-center align-items-start gap-2">
            <div class="flex-grow-1">
                <p>{{__("Apakah Anda pernah melamar di Autopedia/ASSA/Triputra Group sebelumnya? Kapan dan untuk posisi apa?")}}
                </p>
            </div>
            <div class="">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="yes" name="is_have_apply"
                        id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        {{__("Ya")}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="no" name="is_have_apply" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        {{__("Tidak")}}
                    </label>
                </div>
            </div>
            <div class="flex-shrink-0 my-sm-3 my-md-0">
                <textarea class="form-control" placeholder="{{__("Comments")}}" name="is_have_apply_comment"
                    style="height: 100px"></textarea>
            </div>
        </div>
        <div class="my-3 d-md-flex flex-row justify-content-center align-items-start gap-2">
            <div class="flex-grow-1">
                <p>{{__("Selain Autopedia, apakah saat ini Anda sedang dalam proses rekrutmen di perusahaan lain? Dimana dan untuk posisi apa?")}}
                </p>
            </div>
            <div class="">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="yes" name="is_have_apply_another"
                        id="flexRadioDefault3">
                    <label class="form-check-label" for="flexRadioDefault3">
                        {{__("Ya")}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="no" name="is_have_apply_another"
                        id="flexRadioDefault4">
                    <label class="form-check-label" for="flexRadioDefault4">
                        {{__("Tidak")}}
                    </label>
                </div>
            </div>
            <div class="flex-shrink-0">
                <textarea class="form-control" placeholder="{{__("Comments")}}" name="is_have_apply_another_comment"
                    id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
        </div>
        <div class="my-3 d-md-flex flex-row justify-content-center align-items-start gap-2">
            <div class="flex-grow-1">
                <p>{{__("Apakah Anda memiliki teman/kerabat yang bekerja di Autopedia/ASSA/Triputra Group? Tolong sebutkan!")}}
                </p>
            </div>
            <div class="">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="yes" name="is_relatives_inside"
                        id="flexRadioDefault5">
                    <label class="form-check-label" for="flexRadioDefault5">
                        {{__("Ya")}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="no" name="is_relatives_inside"
                        id="flexRadioDefault6">
                    <label class="form-check-label" for="flexRadioDefault6">
                        {{__("Tidak")}}
                    </label>
                </div>
            </div>
            <div class="flex-shrink-0">
                <textarea class="form-control" placeholder="{{__("Comments")}}" name="is_relatives_inside_comment"
                    id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
        </div>
        <div class="my-3 d-md-flex flex-row justify-content-center align-items-start gap-2">
            <div class="flex-grow-1">
                <p>{{__("Jika diterima, apakah Anda bersedia ditempatkan di luar kota?")}}</p>
            </div>
            <div class="">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="yes" name="is_availabe_out_of_town"
                        id="flexRadioDefault5">
                    <label class="form-check-label" for="flexRadioDefault5">
                        {{__("Ya")}}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="yes" name="is_availabe_out_of_town"
                        id="flexRadioDefault6">
                    <label class="form-check-label" for="flexRadioDefault6">
                        {{__("Tidak")}}
                    </label>
                </div>
            </div>
            <div class="flex-shrink-0">
                <textarea class="form-control" placeholder="{{__("Comments")}}" name="is_availabe_out_of_town_comment"
                    id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
        </div>
    </div>

    <!-- col-2 -->
    <div class="my-4 row">
        <div class="col-md-6 col-sm-12">
            <label for="upload-pas-photo" class="form-label">
                {{__("Upload Pas Foto")}}
                <span>*</span>
            </label>
            <input type="file" class="form-control" id="upload-pas-photo" name="upload_file"
                aria-describedby="upload-pas-photo" placeholder="">
            <span class="fs-12 text-danger">
                {{__("Masukkan format gambar dengan (jpeg, jpg, png, svg, webp atau gif) dan unggah file maks 4 MB")}}
            </span>
        </div>

        <div class="mt-5 mb-3">
            <h4 class="common-bold">{{__("Persetujuan")}}</h4>
            <div class="d-flex gap-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7"
                        name="agreement_with_all" required>
                    <label class="form-check-label" for="flexCheckDefault7">
                        {{__("Semua data yang saya isi di atas sesuai dengan keadaan sebenarnya. Jika ada data yang tidak sesuai dengan aslinya, maka saya bersedia diberhentikan dari proses rekrutmen yang sedang berlangsung dan bertindak sesuai hukum yang berlaku.")}}
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- btn -->
    <div class="row gap-3 m-0 px-2">
        <button class="col btn-prev prev-3 prev">{{__("Sebelumnya")}}</button>
        <button class="btn btns btn-submit fw-bold" type="submit">{{__("Lamar")}}</button>
    </div>
</div>