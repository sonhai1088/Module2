@extends('home')
@section('title', 'Thêm ghi chú mới')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Sửa ghi chú</h1>
            </div>
            <div class="col-6">
                <form method="post" action="{{route ('notes_type.update', $note_type->id)}}">
                    @csrf
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="name" value="{{$note_type->name}}" required>
                    </div>
                    <div class="form-group">
                        <label>Thể loại</label>
                        <input class="form-control" name="description" value="{{$note_type->description}}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
