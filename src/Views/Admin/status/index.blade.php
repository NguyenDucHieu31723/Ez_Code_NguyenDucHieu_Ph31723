@extends('layouts.master')
@section('title')
    Danh sách trạng thái
@endsection
@section('content')
    <div class="container">
        <h1 class="h3 mb-4 text-gray-800">Trạng thái</h1>

        <div class="row">
            <div class="col-lg">
                <!-- Circle Buttons -->
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Danh sách trạng thái</h6>
                        <br>
                        <a href="/admin/status/create" class="btn btn-primary">Thêm mới</a>
                    </div>
                    <div class="card-body">
                        <!-- Circle Buttons (Default) -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($status as $items)
                                    <tr>

                                        <th scope="row">{{ $items['id'] }}</th>
                                        <td>{{ $items['name'] }}</td>
                                        <td>
                                            <a href="/admin/status/{{ $items['id'] }}/update"
                                                class="btn btn-primary btn-circle">
                                                <i class="fas fa-fw fa-wrench"></i>
                                            </a>
                                            <a href="/admin/status/{{ $items['id'] }}/show"
                                                class="btn btn-success btn-circle">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="/admin/status/{{ $items['id'] }}/delete"
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
    </div>
@endsection
