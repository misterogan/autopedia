@extends('layouts.app')
@section('content')

    <div class="container px-5 my-5">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header bg-blue-autopedia">
                        <h5 class="card-title font-weight-bold text-white m-0">Business Form</h5>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form" id="create_business_form"  enctype="multipart/form-data" >

                        <div class="card-body">
                            <div class="mb-15">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Business Name <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" name="business_name" id="business_name" class="form-control" placeholder="Enter business name" />
                                        <small class="form-text text-dark font-weight-bold">Please enter Business name</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Short Description (English) <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="short_description_en" id="short_description_en" style="resize: none"></textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter description</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Short Description (Indonesian) <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="short_description_in" id="short_description_in" style="resize: none"></textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter description</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description (English) <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="description_en" id="description_en" style="resize: none"></textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter description</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description (Indonesian) <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="description_in" id="description_in" style="resize: none"></textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter description</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Logo Image</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="logo_image" class="form-control" accept="image/*" style="margin-bottom: 20px;" />
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Thumbnail Image <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="file" name="thumbnail_image" class="form-control" accept="image/*" />
                                        <smalll class="form-text text-dark font-weight-bold
                                        ">Input image you want to upload, max 1 MB</smalll>
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Product Image <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="file" name="product_image" class="form-control" accept="image/*" />
                                        <small class="form-text text-muted">Input image you want to upload, max 4 MB</small>
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Banner Image <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="file" name="banner_image" class="form-control" accept="image/*" />
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Banner Image Mobile <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="file" name="banner_image_mobile" class="form-control" accept="image/*" />
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Sequence <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" name="sequence" id="sequence" class="form-control" placeholder="Enter sequence" />
                                        <small class="form-text text-dark font-weight-bold">Please enter sequence</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Features Title (English)<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" name="features_title_en" id="features_title_en" class="form-control" placeholder="Enter features title" />
                                        <small class="form-text text-muted">Please enter features title</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Features Title (Indonesian)<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" name="features_title_in" id="features_title_in" class="form-control" placeholder="Enter features title" />
                                        <small class="form-text text-dark font-weight-bold">Please enter features title</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Features Description (English)</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="features_description_en" id="features_description_en" class="form-control" placeholder="Enter features description" />
                                        <small class="form-text text-dark font-weight-bold">Please enter features description</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Features Description (Indonesian)</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="features_description_in" id="features_description_in" class="form-control" placeholder="Enter features description" />
                                        <small class="form-text text-dark font-weight-bold">Please enter features description</small>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-form-label">Status <span class="text-danger">*</span></label>
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
<script src="/js/admin/business.js"></script>
@endsection
@endsection
