@extends('layouts.master')
@section('title')
    Bình luận
@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Bình luận</h1>

        <div class="row">
            <div class="col-lg">
                <!-- Circle Buttons -->
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Danh sách bình luận</h6>
                    </div>
                    <div class="card-body">
                        <!-- Circle Buttons (Default) -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nội dung bình luận</th>
                                    <th scope="col">Tên tài khoản</th>
                                    <th scope="col">Tên khóa học</th>
                                    <th scope="col">Hình ảnh</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $comment)
                                    <tr>
                                        <th scope="row">{{ $comment['c_id'] }}</th>
                                        <td>{{ $comment['c_content'] }}</td>
                                        <td>{{ $comment['u_fullname'] }}</td>
                                        <td>{{ $comment['co_name'] }}</td>
                                        <td><img src="{{ $comment['c_image'] }}" width="100px"></td>
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
