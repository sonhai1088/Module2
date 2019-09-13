@extends('home')
@section('title', 'Thêm thể loại mới')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm thể loại mới</h1>
            </div>
            <div class="col-6">
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label>Thể loại</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <input type="text" class="form-control" name="description" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
