@extends('layouts.master')
@section('title')
    Cập nhật người dùng
@endsection
@section('content')
    <div class="container">
        <h1 class="h3 mb-4 text-gray-800">Cập nhật người dùng: {{ $users['username'] }}</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên người dùng</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $users['username'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Họ và tên</label>
                <input name="fullname" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $users['fullname'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $users['email'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
                <input name="password" type="password" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" value="{{ $users['password'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ảnh đại diện</label>
                <input name="avatar" type="file" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <img src="{{ $users['avatar'] }}" alt="" width="100px">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                <input name ="tel" type="number" class="form-control" id="exampleInputPassword1"
                    value="{{ $users['tel'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
                <input name="address" type="text" class="form-control" id="exampleInputPassword1"
                    value="{{ $users['address'] }}">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
    </div>
@endsection
