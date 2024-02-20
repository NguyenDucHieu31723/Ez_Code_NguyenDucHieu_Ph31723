@extends('layouts.master')
@section('title')
    Danh sách danh mục
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Danh mục</h1>
        <div class="row">
            <div class="col-lg">
                <!-- Circle Buttons -->
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Danh sách danh mục</h6><br>
                        <a href="/admin/categories/create" class="btn btn-primary">Thêm mới</a>

                    </div>
                    <div class="card-body">
                        <!-- Circle Buttons (Default) -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên danh mục</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $category['c_id'] }}</th>
                                        <td>{{ $category['c_name'] }}</td>
                                        <td>{{ $category['c_description'] }}</td>
                                        <td>
                                            <img src="{{ $category['c_thumbnail'] }}" width="100px">
                                        </td>
                                        <td>{{ $category['s_name'] }}</td>
                                        <td>
                                            <a href="/admin/categories/{{ $category['c_id'] }}/update"
                                                class="btn btn-primary btn-circle">
                                                <i class="fas fa-fw fa-wrench"></i>
                                            </a>
                                            <a href="/admin/categories/{{$category['c_id']}}/show" class="btn btn-success btn-circle">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="/admin/categories/{{ $category['c_id'] }}/delete"
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
