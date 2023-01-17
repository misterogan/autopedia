@extends('layouts.app')
@section('css')
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Whistleblowing</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="blog_table" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Type</th>
                        <th>Reporter Name</th>
                        <th>Reporter Phone</th>
                        <th>Reporter Email</th>
                        <th>Reported Name</th>
                        <th>Reported Position</th>
                        <th>Created at</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($allcsr as $csr)
                        <tr>
                            <td><a href="/admin/whistleblowing/get/{{$csr->id}}">{{$csr->action}}</a></td>
                            <td>{{$csr->reporters_name}}</td>
                            <td>{{$csr->reporters_phone}}</td>
                            <td>{{$csr->reporters_email}}</td>
                            <td>{{$csr->reported_name}}</td>
                            <td>{{$csr->reported_position}}</td>
                            <td>{{$csr->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Type</th>
                        <th>Reporter Name</th>
                        <th>Reporter Phone</th>
                        <th>Reporter Email</th>
                        <th>Reported Name</th>
                        <th>Reported Position</th>
                        <th>Created at</th>
                    </tr>
                    </tfoot>
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
