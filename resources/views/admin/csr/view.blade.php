@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">CSR Detail</h3>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form" id="edit_blog_form"  enctype="multipart/form-data" >

                        <div class="card-body">
                            <div class="mb-15">

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Action</label>
                                    <div class="col-lg-6">
                                        <span class="form-text text-muted">{{$csr->action}}</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Reporter Name</label>
                                    <div class="col-lg-6">
                                        <span class="form-text text-muted">{{$csr->reporters_name}}</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Reporter Phone</label>
                                    <div class="col-lg-6">
                                        <span class="form-text text-muted">{{$csr->reporters_phone}}</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Reporter Phone</label>
                                    <div class="col-lg-6">
                                        <span class="form-text text-muted">{{$csr->reporters_phone}}</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Reporter Address</label>
                                    <div class="col-lg-6">
                                        <span class="form-text text-muted">{{$csr->reporters_address}}</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Reporter Email</label>
                                    <div class="col-lg-6">
                                        <span class="form-text text-muted">{{$csr->reporters_email}}</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Reported Name</label>
                                    <div class="col-lg-6">
                                        <span class="form-text text-muted">{{$csr->reported_name}}</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Reported Position</label>
                                    <div class="col-lg-6">
                                        <span class="form-text text-muted">{{$csr->reported_position}}</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Incident Date</label>
                                    <div class="col-lg-6">
                                        <span class="form-text text-muted">{{$csr->incident_date}}</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Incident Place</label>
                                    <div class="col-lg-6">
                                        <span class="form-text text-muted">{{$csr->incident_place}}</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description</label>
                                    <div class="col-lg-6">
                                        <span class="form-text text-muted">{{$csr->description}}</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Nominal</label>
                                    <div class="col-lg-6">
                                        <span class="form-text text-muted">{{$csr->nominal}}</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">File</label>
                                    <div class="col-lg-6">
                                        <img src="/{{$csr->file ?? ''}}" class="rounded" style="width: 200px;">
                                    </div>
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
    <script src="/js/admin/blog.js"></script>
@endsection
@endsection
