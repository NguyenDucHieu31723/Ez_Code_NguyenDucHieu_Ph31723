@extends('layouts.master')
@section('title')
    Chi tiết danh mục
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
                        <h6 class="m-0 font-weight-bold text-primary">Chi tiết danh mục: {{ $categories['c_name'] }}</h6><br>
                        <a href="/admin/categories" class="btn btn-primary">Danh sách</a>

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
                                    <td>Tên danh mục</td>
                                    <td>{{ $categories['c_name'] }}</td>
                                </tr>
                                <tr>
                                    <td>Mô tả</td>
                                    <td>{{ $categories['c_description'] }}</td>
                                </tr>
                                <tr>
                                    <td>Hình ảnh</td>
                                    <td><img src="{{ $categories['c_thumbnail'] }}" alt="" width="100px"></td>
                                </tr>
                                <tr>
                                    <td>Trạng thái</td>
                                    <td>{{ $categories['s_name'] }}</td>
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
