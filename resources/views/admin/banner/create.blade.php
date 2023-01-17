@extends('layouts.app')
@section('content')

    <div class="container px-5 my-5">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header bg-blue-autopedia">
                        <h5 class="card-title font-weight-bold text-white m-0">Banner Form</h5>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form" id="create_banner_form"  enctype="multipart/form-data" >

                        <div class="card-body">
                            <div class="mb-15">

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Image <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="file" name="image_upload" class="form-control" accept="image/*" />
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>

                            </div>

                            <div class="mb-15">

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Mobile Image <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="file" name="mobile_image_upload" class="form-control" accept="image/*" style="margin-bottom: 20px;" />
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Link</label>
                                <div class="col-lg-6">
                                    <input type="text" name="link" id="link" class="form-control" placeholder="Enter title link" />
                                    <small class="form-text text-dark font-weight-bold">Please enter link </small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Sequence <span class="text-danger">*</span></label>
                                <div class="col-lg-6">
                                    <input type="text" name="sequence" id="sequence" class="form-control" placeholder="Enter sequence" />
                                    <small class="form-text text-dark font-weight-bold">Please enter sequence</small>
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
    <script src="/js/admin/banner.js"></script>
@endsection
@endsection
