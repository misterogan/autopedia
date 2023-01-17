@extends('layouts.app')
@section('css')
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow m-5">
        <div class="card-header bg-blue-autopedia py-3">
            <h5 class="m-0 font-weight-bold text-white m-0">Data Jobs</h5>
        </div>
        <div class="card-toolbar mt-4 mx-3">
            <h5 class="d-flex align-items-center">
                &nbsp;
                <a href="/admin/job/add" class="d-none d-sm-inline-block btn btn-sm bg-blue-autopedia text-white"><i class="fas fa-plus fa-sm text-white"></i> Add Job</a>
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
                <table class="table table-bordered" id="business_table" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Job Type</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jobs as $job)
                        <tr>
                            <td><a href="/admin/job/edit/{{$job->slug}}">{{$job->name}}</a></td>
                            <td>{{$job->location}}</td>
                            <td>{{$job->job_type}}</td>
                            <td>{{$job->status}}</td>
                            <td>{{$job->created_at}}</td>
                            <td style="text-align: center;"><a onclick="return confirm('Are you sure?')" href="/admin/job/delete/{{$job->id}}"><i class="fa fa-trash color-autopedia"></i></a></td>
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
