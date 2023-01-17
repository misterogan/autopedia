@extends('layouts.app')
@section('content')

    <div class="container px-5 my-5">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header bg-blue-autopedia">
                        <h5 class="card-title font-weight-bold text-white m-0">File Category Form</h5>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form" id="create_category_form"  enctype="multipart/form-data" >

                        <div class="card-body">
                            <div class="mb-15">

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Menu:</label>
                                    <div class="col-lg-6">
                                        <select class="form-control" name="menu" id="menu">
                                            <option value="">Choose Menu</option>
                                            <option value="info-perusahaan">Info Perusahaan</option>
                                            <option value="tata-kelola-perusahaaan">Tata Kelola Perusahaan</option>
                                            <option value="hubungan-investor">Hubungan Investor</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Category Name (English):</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="category_en_name" id="category_en_name">
                                        <small class="form-text text-dark font-weight-bold">Please enter Category in english</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Category Name (Indonesian):</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="category_in_name" id="category_in_name">
                                        <small class="form-text text-dark font-weight-bold">Please enter Category in indonesia</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Sequence</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="sequence" id="sequence">
                                        <small class="form-text text-dark font-weight-bold">Please enter sequence</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Icon</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="icon" class="form-control" accept="image/*" />
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-form-label">Status</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio">
                                            <input type="radio" name="status" value="active" />
                                            <span></span>Active</label>
                                        <label class="radio">
                                            <input type="radio" name="status" value="inactive" />
                                            <span></span>Inactive</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <button type="submit" id="btn_create_product" class="btn bg-blue-autopedia text-white mr-2">Save</button>
                                    <button type="reset" id="btn_cancel" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>
@section('js')
    <script src="/js/admin/category.js"></script>
@endsection
@endsection
