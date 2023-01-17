@extends('layouts.app')
@section('content')

    <div class="container px-5 my-5">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header bg-blue-autopedia">
                        <h5 class="card-title font-weight-bold text-white m-0">Management Form</h5>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form" id="edit_management_form"  enctype="multipart/form-data" >
                        <input type="hidden" name="management_id" id="management_id" value="{{$management->id}}"/>
                        <div class="card-body">
                            <div class="mb-15">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Name:</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="management_name" id="management_name" value="{{$management->name}}" class="form-control" placeholder="Enter name" />
                                        <small class="form-text text-dark font-weight-bold">Please enter name</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Position (english)</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="position_en" id="position_en" class="form-control"  value="{{$management->position_en}}" placeholder="Enter Position in english" />
                                        <small class="form-text text-dark font-weight-bold">Please enter position in English</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Position (indonesia)</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="position_in" id="position_in" class="form-control" value="{{$management->position_in}}" placeholder="Please enter position in Indonesia" />
                                        <small class="form-text text-dark font-weight-bold">Please enter position in Indonesia</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description (english)</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="description_en" id="description_en" style="resize: none">{{$management->description_en}}</textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter description in English</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description (indonesia)</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="description_in" id="description_in" style="resize: none">{{$management->description_in}}</textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter description in Indonesia</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Image</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="image" class="form-control" accept="image/*" />
                                        <img src="/{{$management->image ?? ''}}" class="rounded" style="width: 200px;margin-top: 20px;">
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Image Banner</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="image_banner" class="form-control" accept="image/*" />
                                        <img src="/{{$management->image_banner ?? ''}}" class="rounded" style="width: 200px;margin-top: 20px;">
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Image Mobile</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="image_mobile" class="form-control" accept="image/*" />
                                        <img src="/{{$management->image_mobile ?? ''}}" class="rounded" style="width: 200px;margin-top: 20px;">
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Division</label>
                                    <div class="col-lg-6">
                                        <select class="form-control" name="division" id="division">
                                            <option value="">-choose division-</option>
                                            <option value="direksi" {{ $management->division == 'direksi' ? 'selected' : '' }}>Direksi</option>
                                            <option value="komisaris" {{ $management->division == 'komisaris' ? 'selected' : '' }}>Komisaris</option>
                                        </select>
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Sequence <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" name="sequence" id="sequence" class="form-control" placeholder="Enter sequence" value="{{$management->sequence}}" />
                                        <small class="form-text text-dark font-weight-bold">Please enter sequence</small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-form-label">Status</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio">
                                            <input type="radio" name="status" value="active"  {{ $management->status == 'active' ? 'checked' : '' }}  />
                                            <span></span>Active</label>
                                        <label class="radio">
                                            <input type="radio" name="status" value="inactive"  {{ $management->status == 'inactive' ? 'checked' : '' }}  />
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
    <script src="/js/admin/management.js"></script>
@endsection
@endsection
