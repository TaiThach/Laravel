@extends('layout')
@section('main-content')
<div class="row">                   
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Cập nhật Người Chơi</h4>
                <form action="{{route('nguoi-choi.cap-nhat',['id'=>$nguoiChoi->id])}}" 
                    method="post">
                   {{ csrf_field() }}
                    <div class="form-group">
                    <label for="ten_dang_nhap">Tên đăng nhập<span class="text-danger">*</span></label>
                    <input type="text" name="ten_dang_nhap" value = "{{ $nguoiChoi->ten_dang_nhap }}" parsley-trigger="change" required="" placeholder="Nhập nội dung" class="form-control" id="ten_dang_nhap">
                    </div>
                    <div class="form-group">
                    <label for="mat_khau">Mật khẩu<span class="text-danger">*</span></label>
                    <input type="text" name="mat_khau" value = "{{ $nguoiChoi->ten_linh_vuc }}" parsley-trigger="change" required="" placeholder="Nhập nội dung" class="form-control" id="mat_khau">
                    </div>
                    <div class="form-group">
                    <label for="email">Email<span class="text-danger">*</span></label>
                    <input type="text" name="email" value = "{{ $nguoiChoi->email }}" parsley-trigger="change" required="" placeholder="Nhập nội dung" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                    <label for="hinh_dai_dien">Hình đại diện<span class="text-danger">*</span></label>
                    <input type="text" name="hinh_dai_dien" value = "{{ $nguoiChoi->hinh_dai_dien }}" parsley-trigger="change" required="" placeholder="Nhập nội dung" class="form-control" id="hinh_dai_dien">
                    </div>
                    <div class="form-group">
                    <label for="diem_cao_nhat">Điểm cao nhất<span class="text-danger">*</span></label>
                    <input type="text" name="diem_cao_nhat" value = "{{ $nguoiChoi->diem_cao_nhat }}" parsley-trigger="change" required="" placeholder="Nhập nội dung" class="form-control" id="diem_cao_nhat">
                    </div>
                    <div class="form-group">
                    <label for="credit">Credit<span class="text-danger">*</span></label>
                    <input type="text" name="credit" value = "{{ $nguoiChoi->credit }}" parsley-trigger="change" required="" placeholder="Nhập nội dung" class="form-control" id="credit">
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Sửa</button>
                </form>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
</div><!-- end col -->
@endsection