@extends('layouts.app')
@section('css')
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow m-5">
        <div class="card-header bg-blue-autopedia py-3">
            <h5 class="m-0 font-weight-bold text-white">Data Banners</h5>
        </div>
        <div class="card-toolbar">
            <div class="d-flex align-items-center mt-4 mx-3">
                &nbsp;
                <a href="/admin/banner/add" class="d-none d-sm-inline-block btn btn-sm bg-blue-autopedia text-white"><i class="fas fa-plus fa-sm text-white-50"></i> Add Banner</a>
                <!-- Wrap with <div>...buttons...</div> if you have multiple buttons -->
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="blog_table" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($banners as $banner)
                        <tr>
                            <td><a href="/admin/banner/edit/{{$banner->id}}">{{$banner->id}}</a></td>
                            <td><img src="../{{$banner->image}}" style="width: 200px"></td>
                            <td>{{$banner->link}}</td>
                            <td>{{$banner->status}}</td>
                            <td>{{$banner->created_at}}</td>
                            <td style="text-align: center;"><a  onclick="return confirm('Are you sure?')" href="/admin/banner/delete/{{$banner->id}}"><i class="fa fa-trash color-autopedia"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                    {{-- <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </tfoot> --}}
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/js/demo/datatables-demo.js"></script>
@endsection
