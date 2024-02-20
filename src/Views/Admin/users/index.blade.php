@extends('layouts.master')
@section('title')
    Quản lí người dùng
@endsection
@section('content')
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Người dùng</h1>

        <div class="row">
            <div class="col-lg">
                <!-- Circle Buttons -->
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Danh sách người dùng</h6><br>
                        <a href="/admin/users/create" class="btn btn-primary">Thêm mới</a>
                    </div>
                    <div class="card-body">
                        <!-- Circle Buttons (Default) -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên người dùng</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mật khẩu</th>
                                    <th scope="col">Ảnh đại diện</th>
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>

                                        <th scope="row">{{ $user['id'] }}</th>
                                        <td>{{ $user['username'] }}</td>
                                        <td>{{ $user['fullname'] }}</td>
                                        <td>{{ $user['email'] }}</td>
                                        <td>{{ $user['password'] }}</td>
                                        <td><img src="{{ $user['avatar'] }}" width="100px"></td>
                                        <td>{{ $user['tel'] }}</td>
                                        <td>{{ $user['address'] }}</td>
                                        <td>
                                            <a href="/admin/users/{{ $user['id'] }}/update"
                                                class="btn btn-primary btn-circle">
                                                <i class="fas fa-fw fa-wrench"></i>
                                            </a>
                                            <a href="/admin/users/{{ $user['id'] }}/show"
                                                class="btn btn-success btn-circle">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="/admin/users/{{ $user['id'] }}/delete"
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
    <!-- End of Main Content -->
@endsection
