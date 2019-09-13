@extends('home')
@section('title', 'Thêm nhân viên')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm nhân viên mới</h1>
            </div>
            <div class="col-6">
                <form method="post" action="">
                    @csrf
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
{{--                    <div class="form-group">--}}
{{--                        <label>Mã nhân viên</label>--}}
{{--                        <input type="text" class="form-control" name="manhanvien" required>--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label>Nhóm nhân viên</label>
                        <select class="form-control" name="nhomnhanvien">
                            <option>Quản lý</option>
                            <option>Lễ tân</option>
                            <option>Buồng phòng</option>
                            <option>Bar</option>
                            <option>Nhà hàng</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" class="form-control" name="hoten" required>
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <select class="form-control" name="gioitinh">
                            <option>Nam</option>
                            <option>Nữ</option>
                        </select>

{{--                        <input type="text" class="form-control" name="gioitinh" required>--}}
                    </div>
                    <div class="form-group">
                        <label>Số điệnt thoại</label>
                        <input type="text" class="form-control" name="sodienthoai" required>
                    </div>
                    <div class="form-group">
                        <label>Số chứng minh thư</label>
                        <input type="text" class="form-control" name="socmnd" required>
                    </div>
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <input type="date" class="form-control" name="ngaysinh" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input type="text" class="form-control" name="diachi" required>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
