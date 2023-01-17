@extends('layouts.app')
@section('content')

    <div class="container px-5 my-5">
        <div class="row mx-2">
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
                    <form class="form" id="edit_business_form"  enctype="multipart/form-data" >
                        <input type="hidden" name="business_id" id="business_id" value="{{$business->id}}">
                        <div class="card-body">
                            <div class="mb-15">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Business Name <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" name="business_name" id="business_name" class="form-control" placeholder="Enter business name" value="{{$business->title}}" />
                                        <small class="form-text text-dark font-weight-bold">Please enter Business name</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Slug <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter page slug" value="{{$business->slug}}" />
                                        <small class="form-text text-dark font-weight-bold">Please enter page slug</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Short Description (English) <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="short_description_en" id="short_description_en" style="resize: none">{{$business->short_description_en}}</textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter description</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Short Description (Indonesian) <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="short_description_in" id="short_description_in" style="resize: none">{{$business->short_description_in}}</textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter description</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description (English)</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="description_en" id="description_en" style="resize: none">{{$business->description_en}}</textarea>
                                        <small class="form-text text-dark font-weight-bold">Please enter description</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Description (Indonesian)</label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="description_in" id="description_in" style="resize: none">{{$business->description_in}}</textarea>
                                        <small class="form-text text-dark font-weight-bold"">Please enter description</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Logo Image</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="logo_image" class="form-control" accept="image/*" style="margin-bottom: 20px;" />
                                        <img src="/{{$business->logo_image ?? ''}}" class="rounded" style="width: 200px;">
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Thumbnail Image</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="thumbnail_image" class="form-control" accept="image/*" style="margin-bottom: 20px;" />
                                        <img src="/{{$business->thumbnail_image ?? ''}}" class="rounded" style="width: 200px;">
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Product Image</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="product_image" class="form-control" accept="image/*" style="margin-bottom: 20px;" />
                                        <img src="/{{$business->product_image ?? ''}}" class="rounded" style="width: 200px;">
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Banner Image</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="banner_image" class="form-control" accept="image/*" style="margin-bottom: 20px;" />
                                        <img src="/{{$business->banner_image ?? ''}}" class="rounded" style="width: 200px;">
                                        <small class="form-text text-dark font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Banner Image Mobile</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="banner_image_mobile" class="form-control" accept="image/*" style="margin-bottom: 20px;" />
                                        <img src="/{{$business->banner_image_mobile ?? ''}}" class="rounded" style="width: 200px;">
                                        <small class="form-text text-muted font-weight-bold">Input image you want to upload, max 1 MB</small>
                                    </div>
                                    <br>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Sequence <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" name="sequence" id="sequence" class="form-control" placeholder="Enter sequence" value="{{$business->sequence}}" />
                                        <small class="form-text text-dark font-weight-bold">Please enter sequence</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Features Title (English)<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" name="features_title_en" id="features_title_en" class="form-control" placeholder="Enter features title" value="{{$business->features_title_en}}" />
                                        <small class="form-text text-dark font-weight-bold">Please enter features title</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Features Title (Indonesian)<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="text" name="features_title_in" id="features_title_in" class="form-control" placeholder="Enter features title" value="{{$business->features_title_in}}" />
                                        <small class="form-text text-dark font-weight-bold">Please enter features title</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Features Description (English)</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="features_description_en" id="features_description_en" class="form-control" placeholder="Enter features description" value="{{$business->features_description_en}}" />
                                        <small class="form-text text-dark font-weight-bold">Please enter features description</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Features Description (Indonesian)</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="features_description_in" id="features_description_in" class="form-control" placeholder="Enter features description" value="{{$business->features_description_in}}" />
                                        <small class="form-text text-dark font-weight-bold">Please enter features description</small>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-3 col-form-label">Status</label>
                                <div class="col-9 col-form-label">
                                    <div class="radio-inline">
                                        <label class="radio">
                                            <input type="radio" name="status" value="active"  {{ $business->status == 'active' ? 'checked' : '' }}  />
                                            <span></span>Active</label>
                                        <label class="radio">
                                            <input type="radio" name="status" value="inactive"  {{ $business->status == 'inactive' ? 'checked' : '' }}  />
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

        <div class="row mx-2">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header bg-blue-autopedia d-flex justify-content-between align-items-center">
                        <h5 class="card-title font-weight-bold text-white m-0">Features</h5>
                        <button  class="d-none d-sm-inline-block btn btn-sm btn-warning text-dark" onclick="addfeaturesmodal();"><i class="fas fa-plus fa-sm text-dark"></i> Add Features</button>

                    </div>

                    <table class="table table-bordered" id="blogTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Title En</th>
                            <th>Title In</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Created at</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($features as $feature)
                                <tr>
                                    <td><button class="btn btn-sm bg-blue-autopedia" onclick="show_features('{{$feature->id}}');"><i class="fas fa-pen fa-sm text-white-50"></i></button></td>
                                    <td>{{$feature->features_title}}</td>
                                    <td>{{$feature->features_title_in}}</td>
                                    <td><img src="/{{$feature->features_image}}" style="width: 200px"></td>
                                    <td>{{$feature->features_status}}</td>
                                    <td>{{$feature->created_at}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th></th>
                            <th>Title En</th>
                            <th>Title In</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Created at</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        </tbody>
                    </table>

                </div>
                <!--end::Card-->
            </div>
        </div>

        <div id="FeaturesAddModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Features</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="add_features_form">
                        <input type="hidden" name="business_id" id="business_id" value="{{$business->id}}">
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Features title En</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="features_title_en" id="features_title_en" class="form-control" placeholder="Enter Features title in English" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Features title In</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="features_title_in" id="features_title_in" class="form-control" placeholder="Enter Features title in Indonesia" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Features description En</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea class="form-control" name="fe_description_en" id="fe_description_en" style="resize: none"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Features description In</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea class="form-control" name="fe_description_in" id="fe_description_in" style="resize: none"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Image </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="image_upload_fea" class="form-control" accept="image/*" style="margin-bottom: 20px;" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Status </label>
                                </div>
                                <div class="col-md-8">
                                    <div class="radio-inline">
                                        <label class="radio">
                                            <input type="radio" name="fe_status" value="active"  />
                                            <span></span>Active</label>
                                        <label class="radio">
                                            <input type="radio" name="fe_status" value="inactive" />
                                            <span></span>Inactive</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div id="FeaturesEditModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Features</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="edit_features_form">
                        <input type="hidden" name="business_id" id="business_id" value="{{$business->id}}">
                        <input type="hidden" name="business_features_id" id="business_features_id">
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Features title En *</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="features_title_edit_en" id="features_title_edit_en" class="form-control" placeholder="Enter Features title" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Features title In *</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="features_title_edit_in" id="features_title_edit_in"  class="form-control" placeholder="Enter Features title" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Features description (en)*</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea class="form-control" name="fe_description_en_edit" id="fe_description_en_edit" style="resize: none"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Features description (in)*</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea class="form-control" name="fe_description_in_edit" id="fe_description_in_edit" style="resize: none"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Image *</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="image_upload_fea_edit" class="form-control" accept="image/*" style="margin-bottom: 20px;" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label>Status *</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="radio-inline">
                                        <label class="radio">
                                            <input type="radio" name="fe_status_edit" value="active" />
                                            <span></span>Active</label>
                                        <label class="radio">
                                            <input type="radio" name="fe_status_edit" value="inactive"/>
                                            <span></span>Inactive</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@section('js')
    <script src="/js/admin/business.js"></script>
@endsection
@endsection
