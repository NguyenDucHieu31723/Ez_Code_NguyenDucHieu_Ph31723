@extends('layouts.master')
@section('title')
    Khóa học
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
                        <h6 class="m-0 font-weight-bold text-primary">Danh sách khóa học</h6><br>
                        <a href="/admin/courses/create" class="btn btn-primary">Thêm mới</a>

                    </div>
                    <div class="card-body">
                        <!-- Circle Buttons (Default) -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên khóa học</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Tổng số lượng</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>

                                        <th scope="row">{{ $course['c_id'] }}</th>
                                        <td>{{ $course['c_name'] }}</td>
                                        <td>{{ $course['c_description'] }}</td>
                                        <td>{{ $course['c_price'] }}</td>
                                        <td>{{ $course['s_name'] }}</td>
                                        <td>
                                            <img src="{{ $course['c_thumbnail'] }}" width="100px">
                                        </td>
                                        <td>{{ $course['c_total_register'] }}</td>
                                        <td>
                                            <a href="/admin/courses/{{ $course['c_id'] }}/update"
                                                class="btn btn-primary btn-circle">
                                                <i class="fas fa-fw fa-wrench"></i>
                                            </a>
                                            <a href="/admin/courses/{{$course['c_id']}}/show" class="btn btn-success btn-circle">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="/admin/courses/{{ $course['c_id'] }}/delete"
                                                class="btn btn-danger btn-circle"
                                                onclick="return confirm('Có chắc xóa không?')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
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
