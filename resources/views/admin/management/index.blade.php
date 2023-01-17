@extends('layouts.app')
@section('css')
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow m-5">
        <div class="card-header bg-blue-autopedia py-3">
            <h5 class="m-0 font-weight-bold text-white">Data Management</h5>
        </div>
        <div class="card-toolbar mt-4 mx-3">
            <h5 class="d-flex align-items-center">
                &nbsp;
                <a href="/admin/management/add" class="d-none d-sm-inline-block btn btn-sm bg-blue-autopedia text-white"><i class="fas fa-plus fa-sm text-white"></i> Add Management</a>
                <!-- Wrap with <div>...buttons...</div> if you have multiple buttons -->
            </h5>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <table class="table table-bordered" id="managementTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Division</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($managements as $management)
                        <tr>
                            <td class="text-center"><img src="../{{$management->image}}" style="height: 150px"></td>
                            <td><a href="/admin/management/edit/{{$management->slug}}" class="color-autopedia">{{$management->name}}</a></td>
                            <td>{{$management->division}}</td>
                            <td>{{$management->status}}</td>
                            <td>{{$management->created_at}}</td>
                            <td style="text-align: center;"><a onclick="return confirm('Are you sure?')" href="/admin/management/delete/{{$management->id}}"><i class="fa fa-trash color-autopedia"></i></a></td>
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
