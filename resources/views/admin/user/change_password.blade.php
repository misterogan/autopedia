@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">Change Password Form</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form" id="change_password_form"  enctype="multipart/form-data" >

                        <div class="card-body">
                            <div class="mb-15">
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Old Password <span>*</span>:</label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" name="old_password" id="old_password">
                                        <span class="form-text text-muted">Please enter your old password</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">New Password <span>*</span>:</label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" name="new_password" id="new_password">
                                        <span class="form-text text-muted">Please enter your new password</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Confirm New Password <span>*</span>:</label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" name="new_password_confirmation" id="confirm_new_password">
                                        <span class="form-text text-muted">Please confirm your new password</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <button type="submit" id="btn_create_product" class="btn btn-success mr-2">Submit</button>
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
    <script src="/js/admin/user.js"></script>
@endsection
@endsection
