@extends('layouts.master')
@section('title')
    Chi tiết người dùng
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Người dùng</h1>
        <div class="row">
            <div class="col-lg">
                <!-- Circle Buttons -->
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Chi tiết người dùng: {{ $users['username'] }} </h6><br>
                        <a href="/admin/users" class="btn btn-primary">Danh sách</a>

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
                                    <td>Tên người dùng</td>
                                    <td>{{ $users['username'] }}</td>
                                </tr>
                                <tr>
                                    <td>Họ và tên</td>
                                    <td>{{ $users['fullname'] }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $users['email'] }}</td>
                                </tr>
                                <tr>
                                    <td>Mật khẩu</td>
                                    <td>{{ $users['password'] }}</td>
                                </tr>
                                <tr>
                                    <td>Ảnh đại diện</td>
                                    <td><img src="{{ $users['avatar'] }}" alt="" width="100px"></td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td>{{ $users['tel'] }}</td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td>{{ $users['address'] }}</td>
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
