@extends('layouts.app')
@section('content')

    <div class="container px-5 my-5">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header bg-blue-autopedia">
                        <h5 class="card-title font-weight-bold text-white m-0">File Form</h5>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form" id="edit_file_form"  enctype="multipart/form-data" >
                        <input type="hidden" name="file_id" id="file_id" value="{{$file->id}}">
                        <div class="card-body">
                            <div class="mb-15">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Subcategory:</label>
                                    <div class="col-lg-6">
                                        <select class="form-control" name="subcategory_id" id="subcategory_id">
                                            <option value="">Choose category</option>
                                            @foreach($subcategories as $subcategory)
                                                <option {{{ ( $file->subcategory_id == $subcategory->id ) ? 'selected="selected"' :'' }}}  value="{{ $subcategory->id }}">{{$subcategory->subcategory_name_en}} / {{$subcategory->subcategory_name_in}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Filename (ID)</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="filename" id="filename" value="{{ $file->file_name}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Filename (EN)</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="filename_en" id="filename_en" value="{{ $file->file_name_en}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Upload</label>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" name="fileupload" id="fileupload">
                                        <small class="form-text text-dark font-weight-bold">upload file with format pdf,xlsx,xls (max 35 Mb)</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Image</label>
                                    <div class="col-lg-6">
                                        <input type="file" class="form-control" name="imageupload" id="imageupload" style="margin-bottom: 20px;">
                                        <img src="/{{$file->image ?? ''}}" class="rounded" style="width: 200px;">
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Upload Date</label>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" name="upload_date" id="upload_date" value="{{date('Y-m-d', strtotime($file->created_at))}}">
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-form-label">Status</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio">
                                            <input type="radio" name="status" value="active" {{ $file->status == 'active' ? 'checked' : '' }}  />
                                            <span></span>Active</label>
                                        <label class="radio">
                                            <input type="radio" name="status" value="inactive" {{ $file->status == 'inactive' ? 'checked' : '' }} />
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
    <script src="/js/admin/file.js"></script>
@endsection
@endsection
