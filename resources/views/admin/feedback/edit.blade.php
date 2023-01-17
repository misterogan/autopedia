@extends('layouts.app')
@section('content')

    <div class="container px-5 my-5">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header bg-blue-autopedia">
                        <h5 class="card-title font-weight-bold text-white m-0">Testimonial Form</h5>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form" id="edit_feedback_form"  enctype="multipart/form-data" >
                        <input type="hidden" name="feedback_id" id="feedback_id" value="{{$feedback->id}}"/>
                        <div class="card-body">
                            <div class="mb-15">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Business Name</label>
                                    <div class="col-lg-6">
                                        <select class="custom-select" id="business_name" name="business_name">
                                            <option selected>Choose...</option>
                                            @foreach($businesses as $business)
                                                <option {{{ ( $feedback->business_id == $business->id ) ? 'selected="selected"' :'' }}}  value="{{ $business->id }}">{{ $business->title }}
                                            @endforeach
                                        </select>
                                        <small class="form-text text-dark font-weight-bold">Please enter Business name</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Testimonial Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="feedback_name" id="feedback_name" value="{{$feedback->name}}">
                                        <small class="form-text text-dark font-weight-bold">Please enter name</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description (English)</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="description_en" id="description_en" style="resize: none">{{$feedback->description_en}}</textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter description in english</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description (Indonesian)</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="description_in" id="description_in" style="resize: none">{{$feedback->description_in}}</textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter description in indonesia</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Feedback (English)</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="feedback_en" id="feedback_en" style="resize: none">{{$feedback->feedback_en}}</textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter Feedback in english</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Feedback (Indonesian)</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="feedback_in" id="feedback_in" style="resize: none">{{$feedback->feedback_in}}</textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter Feedback in indonesia</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Image</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="image_upload" class="form-control" accept="image/*" />
                                        <img src="/{{$feedback->image ?? ''}}" class="rounded" style="width: 200px;margin-top: 20px;">
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
                                            <input type="radio" name="status" value="active" {{ $feedback->status == 'active' ? 'checked' : '' }} />
                                            <span></span>Active</label>
                                        <label class="radio">
                                            <input type="radio" name="status" value="inactive" {{ $feedback->status == 'inactive' ? 'checked' : '' }} />
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
    <script src="/js/admin/feedback.js"></script>
@endsection
@endsection
