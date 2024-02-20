@extends('layouts.master')
@section('title')
    Thêm danh mục
@endsection
@section('content')
    <div class="container mb-3">
        <h1 class="h3 mb-4 text-gray-800">Thêm mới danh mục</h1>
        <div class="row">
            <div class="col-lg">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mô tả</label>
                        <input name="description" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Hình ảnh</label>
                        <input name="thumbnail" type="file" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Trạng thái</label>
                        <select name="status" class="form-select" aria-label="Default select example">
                            <option value="">---Chọn---</option>
                            @foreach ($status as $item)
                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>

    </div>
    </div>
@endsection
