@extends('layouts.master')
@section('title')
    Thêm trạng thái
@endsection
@section('content')
    <div class="container">
        <h1 class="h3 mb-4 text-gray-800">Thêm trạng thái</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên trạng thái</label>
                <input name="status" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
    </div>
    </div>
@endsection
