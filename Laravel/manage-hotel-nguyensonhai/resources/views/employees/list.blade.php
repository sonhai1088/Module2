@extends('home')
@section('title', 'Danh sách nhân viên')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class = "col-6">
                <a class="btn btn-primary" href="{{ route('employees.create') }}">Thêm mới</a>
            </div>

            <div class="col-6">
                <form class="navbar-form navbar-left" action="{{route('employees.search')}}">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <input name = 'keyword' type="text" class="form-control" placeholder="Search">
                            </div>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-default" type="submit">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div>



            <div class="col-12">
                <h1>Danh sách nhân viên</h1>
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
                    <th scope="col">Mã nhân viên</th>
                    <th scope="col">Nhóm nhân viên</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Chức năng</th>
                </tr>
                </thead>
                <tbody>
                @if(count($employees) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($employees as $key => $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->nhomnhanvien }}</td>
                            <td>{{ $employee->hoten }}</td>
                            <td>{{ $employee->gioitinh }}</td>
                            <td>{{ $employee->sodienthoai }}</td>
                            <td>

                                <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                                <a href="{{ route('employees.delete', $employee->id) }}" class="text-danger"
                                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>
                            </td>


                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

        </div>
    </div>
@endsection
