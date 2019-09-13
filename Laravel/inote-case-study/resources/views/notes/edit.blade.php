@extends('home')
@section('title', 'Thêm ghi chú mới')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Sửa ghi chú</h1>
            </div>
            <div class="col-6">
                <form method="post" action="{{route ('notes.update', $note->id)}}">
                    @csrf
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input type="text" class="form-control" name="title" value="{{$note->title}}" required>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea rows ="3" cols = "40" class="form-control" name="content" required>{{$note->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Loại ghi chú</label>
                        <select class="form-control" name="note_type">
                            @foreach($notes_type as $note_type)
                                <option
                                    @if($note_type->type == $note_type->id)
                                    {{"selected"}}
                                    @endif
                                    value="{{ $note_type->id }}">{{ $note_type->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Sửa</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
