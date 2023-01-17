@extends('layouts.app')
@section('content')

    <div class="container px-5 my-5">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header bg-blue-autopedia">
                        <h5 class="card-title font-weight-bold text-white m-0">Subcategory Form</h5>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form" id="edit_subcategory_form"  enctype="multipart/form-data" >
                        <input type="hidden" name="subcategory_id" id="subcategory_id" value="{{$subcategory->id}}">
                        <div class="card-body">
                            <div class="mb-15">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Category:</label>
                                    <div class="col-lg-6">
                                        <select class="form-control" name="category_id" id="category_id">
                                            <option value="">Choose category</option>
                                            @foreach($categories as $category)
                                                <option {{{ ( $subcategory->category_id == $category->id ) ? 'selected="selected"' :'' }}}  value="{{ $category->id }}">{{$category->category_en}} / {{$category->category_in}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Sub category name (English):</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="subcategory_en_name" id="subcategory_en_name" value="{{$subcategory->subcategory_name_en}}">
                                        <small class="form-text text-dark font-weight-bold">Please enter subcategory in english</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Sub category name (Indonesian):</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="subcategory_in_name" id="subcategory_in_name" value="{{$subcategory->subcategory_name_in}}">
                                        <small class="form-text text-dark font-weight-bold">Please enter subcategory in indonesia</small>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-form-label">Status</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio">
                                            <input type="radio" name="status" value="active" {{ $subcategory->status == 'active' ? 'checked' : '' }} />
                                            <span></span>Active</label>
                                        <label class="radio">
                                            <input type="radio" name="status" value="inactive" {{ $subcategory->status == 'inactive' ? 'checked' : '' }} />
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
    <script src="/js/admin/subcategory.js"></script>
@endsection
@endsection
