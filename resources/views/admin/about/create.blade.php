@extends('layouts.app')
@section('content')

    <div class="container my-5 px-5">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header bg-blue-autopedia text-white">
                        <h4 class="card-title font-weight-bold m-0">About Form</h4>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form" id="add_about_form"  enctype="multipart/form-data" >

                        <div class="card-body">
                            <div class="mb-15">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Title (English):</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="title_en" id="title_en" class="form-control" placeholder="Enter title in english" value="{{$about->title_en ?? ''}}" />
                                        <small class="form-text text-dark font-weight-bold">Please enter title in english</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Title (Indonesian):</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="title_in" id="title_in" class="form-control" placeholder="Enter title in indonesia" value="{{$about->title_in ?? ''}}" />
                                        <small class="form-text text-dark font-weight-bold">Please enter title in indonesia</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Short Description (English):</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="short_description_en" id="short_description_en" style="resize: none">{{$about->short_description_en ?? ''}}</textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter short description in english</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Short Description (Indonesian):</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="short_description_in" id="short_description_in" style="resize: none">{{$about->short_description_in ?? ''}}</textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter short description in indonesia</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description (English):</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="description_en" id="description_en" style="resize: none">{{$about->description_en ?? ''}}</textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter description</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description (Indonesian):</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="description_in" id="description_in" style="resize: none">{{$about->description_in ?? ''}}</textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter description</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Youtube Video ID</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="youtube_video_id" id="youtube_video_id" style="resize: none">{{$about->youtube_video_id ?? ''}}</textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter youtube video ID only, (ex: txyqnV8WH2w)</small>
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
    <script src="/js/admin/about.js"></script>
@endsection
@endsection
