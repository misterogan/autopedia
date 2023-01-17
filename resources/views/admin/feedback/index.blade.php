@extends('layouts.app')
@section('css')
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow m-5">
        <div class="card-header bg-blue-autopedia py-3">
            <h5 class="m-0 font-weight-bold text-white m-0">Data Testimonials</h5>
        </div>
        <div class="card-toolbar mt-4 mx-3">
            <h5 class="d-flex align-items-center">
                &nbsp;
                <a href="/admin/feedback/add" class="d-none d-sm-inline-block btn btn-sm bg-blue-autopedia text-white"><i class="fas fa-plus fa-sm text-white"></i> Add Testimonial</a>
                <!-- Wrap with <div>...buttons...</div> if you have multiple buttons -->
            </h5>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="feedbackTable" width="100%" cellspacing="0">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <thead>
                    <tr>
                        <th>Business</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($feedbacks as $feedback)
                            <tr>
                                <td>{{$feedback->business->title}}</td>
                                <td><a href="/admin/feedback/edit/{{$feedback->id}}">{{$feedback->name}}</a></td>
                                <td>{{$feedback->status}}</td>
                                <td>{{$feedback->created_at}}</td>
                                <td style="text-align: center;"><a onclick="return confirm('Are you sure?')" href="/admin/feedback/delete/{{$feedback->id}}"><i class="fa fa-trash color-autopedia"></i></a></td>
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
