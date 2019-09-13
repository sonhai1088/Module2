@extends('home')
@section('title', 'Danh sách ghi chú')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class = "col-1">
            <a class="btn btn-primary" href="{{ route('notes.index') }}">Notes</a>
            </div>

            <div class = "col-1">
            <a class="btn btn-primary" href="notes_type">Note_type</a>
            </div>

            <div class="col-12">
                <h1>Các ghi chú</h1>
            </div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <table class="table table-striped" border="1">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Thể loại</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($notes) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($notes as $key => $note)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $note->title }}</td>
                            <td>{{ $note->content }}</td>
                            <td>{{ $note->type }}</td>
                            <td><a href="{{ route('notes.edit', $note->id) }}">Edit</a></td>
                            <td><a href="{{ route('notes.delete', $note->id) }}" class="text-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('notes.create') }}">Thêm mới</a>
        </div>
    </div>
@endsection
