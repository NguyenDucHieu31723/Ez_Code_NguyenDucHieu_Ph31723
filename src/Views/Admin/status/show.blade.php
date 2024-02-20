@extends('layouts.master')
@section('title')
    Chi tiết trạng thái
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Trạng thái</h1>
        <div class="row">
            <div class="col-lg">
                <!-- Circle Buttons -->
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Chi tiết trạng thái</h6><br>
                        <a href="/admin/status" class="btn btn-primary">Danh sách</a>

                    </div>
                    <div class="card-body">
                        <!-- Circle Buttons (Default) -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Trường dữ liệu</th>
                                    <th scope="col">Giá trị</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $status['id'] }}</td>
                                </tr>
                                <tr>
                                    <td>Tên trạng thái</td>
                                    <td>{{ $status['name'] }}</td>
                                </tr>
                             
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
           
        </div>
    </div>
     
    <!-- /.container-fluid -->
    </div>
@endsection
