@extends('layouts.master')
@section('title')
    Chi tiết khóa học
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Khóa học</h1>
        <div class="row">
            <div class="col-lg">
                <!-- Circle Buttons -->
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Chi tiết khóa học: {{ $courses['c_name'] }} </h6><br>
                        <a href="/admin/courses" class="btn btn-primary">Danh sách</a>

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
                                    <td>Tên khóa học</td>
                                    <td>{{ $courses['c_name'] }}</td>
                                </tr>
                                <tr>
                                    <td>Mô tả</td>
                                    <td>{{ $courses['c_description'] }}</td>
                                </tr>
                                <tr>
                                    <td>Giá khóa học</td>
                                    <td>{{ $courses['c_price'] }}</td>
                                </tr>
                                <tr>
                                    <td>Trạng thái</td>
                                    <td>{{ $courses['s_name'] }}</td>
                                </tr>
                                <tr>
                                    <td>Hình ảnh</td>
                                    <td><img src="{{ $courses['c_thumbnail'] }}" alt="" width="100px"></td>
                                </tr>
                                <tr>
                                    <td>Số lượng đăng kí</td>
                                    <td>{{ $courses['c_total_register'] }}</td>
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
