@extends('layouts.app')
@section('content')

    <div class="container px-5 my-5">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header bg-blue-autopedia">
                        <h5 class="card-title text-white font-weight-bold m-0">Blog Form</h5>
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="form" id="create_blog_form"  enctype="multipart/form-data" >

                        <div class="card-body">
                            <div class="mb-15">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Blog Category</label>
                                    <div class="col-lg-6">
                                        <select class="form-control" name="blog_category" id="blog_category">
                                            <option value="">Choose Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category_en}} / {{$category->category_in}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Title (English)</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="title_en" id="title_en" class="form-control" placeholder="Enter title in english" />
                                        <small class="form-text text-dark font-weight-bold">Please enter title in english</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Title (Indonesian)</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="title_in" id="title_in" class="form-control" placeholder="Enter title in indonesia" />
                                        <small class="form-text text-dark font-weight-bold">Please enter title in indonesia</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description (English)</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="description_en" id="description_en" style="resize: none"></textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter description</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description (Indonesian)</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="description_in" id="description_in" style="resize: none"></textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter description</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Thumbnail</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="thumbnail" class="form-control" accept="image/*" />
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Image</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="image_upload" class="form-control" accept="image/*" />
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Upload Date</label>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control" name="upload_date" id="upload_date">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Meta Description</label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" name="meta_desc" id="meta_desc" style="height: 100px" placeholder="Enter Meta Description .."></textarea>
                                    <small class="form-text text-dark font-weight-bold">Please enter Meta Description *(only 155 - 160 Character)</small>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Meta Keyword</label>
                                <div class="col-lg-6">
                                    <input type="text" name="keyword" id="keyword" class="form-control"/>
                                    <small class="form-text text-dark font-weight-bold">Please Enter Meta Keyword</small>
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Meta Tag:</label>
                                <div class="col-lg-6">
                                    <input type="text" name="meta_tag" id="meta_tag" class="form-control"/>
                                    <span class="form-text text-dark">Please enter Meta Tag</span>
                                </div>
                            </div> --}}

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
    <script src="/js/admin/blog.js"></script>
@endsection
@endsection
