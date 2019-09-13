@extends('home')
@section('title', 'Danh sách ghi chú')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class = "col-1">
                <a class="btn btn-primary" href="notes">Notes</a>
            </div>

            <div class = "col-1">
                <a class="btn btn-primary" href="">Note_type</a>
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
            <table class="col-12" border="1">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Thể loại</th>
                    <th scope="col">Nội dung</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($notes_type) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($notes_type as $key => $note_type)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $note_type->name }}</td>
                            <td>{{ $note_type->description }}</td>
                            <td>
                                <a href="{{ route('notes_type.edit', $note_type->id) }}">Edit</a>
                                <a href="{{ route('notes_type.delete', $note_type->id) }}" class="text-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{route('notes_type.create')}}">Thêm mới</a>
        </div>
    </div>
@endsection
