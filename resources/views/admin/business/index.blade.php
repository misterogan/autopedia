@extends('layouts.app')
@section('css')
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow m-5">
        <div class="card-header bg-blue-autopedia py-3">
            <h5 class="m-0 font-weight-bold text-white">Data Business</h5>
        </div>
        <div class="card-toolbar mt-4 mx-3">
            <h5 class="d-flex align-items-center">
                &nbsp;
                <a href="/admin/business/add" class="d-none d-sm-inline-block btn btn-sm bg-blue-autopedia text-white"><i class="fas fa-plus fa-sm text-white"></i> Add Business</a>
            </h5>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <table class="table table-bordered" id="business_table" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Sequence</th>
                        <th>Banner Image</th>
                        <th>Business Name</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Sequence</th>
                        <th>BannerImage</th>
                        <th>Business Name</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        @foreach($businesses as $business)
                            <tr>
                                <td>{{$business->sequence}}</td>
                                <td><img src="{{ asset($business->banner_image) }}" style="width: 200px"></td>
                                <td><a href="/admin/business/edit/{{$business->slug}}">{{$business->title}}</a></td>
                                <td>{{$business->status}}</td>
                                <td>{{$business->created_at}}</td>
                                <td style="text-align: center;"><a  onclick="return confirm('Are you sure?')" href="/admin/business/delete/{{$business->id}}"><i class="fa fa-trash color-autopedia"></i></a></td>
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
