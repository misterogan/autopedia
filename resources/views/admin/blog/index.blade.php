@extends('layouts.app')
@section('css')
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow m-5">
        <div class="card-header bg-blue-autopedia py-3">
            <h5 class="m-0 font-weight-bold text-white">Data Blogs</h5>
        </div>
        <div class="card-toolbar mt-4 mx-3">
            <div class="d-flex align-items-center">
                &nbsp;
                <a href="/admin/blog/add" class="d-none d-sm-inline-block btn btn-sm bg-blue-autopedia text-white"><i class="fas fa-plus fa-sm text-white"></i> Add Blog</a>
                <!-- Wrap with <div>...buttons...</div> if you have multiple buttons -->
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="blog_table" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Thumbnail</th>
                        <th>Title (ID)</th>
                        <th>Title (EN)</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td><img src="../{{$blog->thumbnail}}" style="width: 150px"></td>
                                <td><a href="/admin/blog/edit/{{$blog->slug}}">{{$blog->title_in}}</a></td>
                                <td><a href="/admin/blog/edit/{{$blog->slug}}">{{$blog->title_en}}</a></td>
                                <td>{{$blog->status}}</td>
                                <td>{{$blog->created_at}}</td>
                                <td style="text-align: center;"><a  onclick="return confirm('Are you sure?')" href="/admin/blog/delete/{{$blog->id}}"><i class="fa fa-trash color-autopedia"></i></a></td>
                            </tr>
                        @endforeach
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
