@extends('layout')
@section('main-content')
<div class="row">
                    
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Cập nhật gói Credit</h4>

                <form action="{{route('goi-credit.cap-nhat',['id' => $goicreDit->id])}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                    <label for="ten_goi">Tên gói<span class="text-danger">*</span></label>
                    <input type="text" name="ten_goi" value = "{{ $goicreDit->ten_goi }}" parsley-trigger="change" required="" placeholder="Nhập nội dung" class="form-control" id="ten_goi">
                    </div>
                    <div class="form-group">
                    <label for="credit">Credit<span class="text-danger">*</span></label>
                    <input type="text" name="credit" value = "{{ $goicreDit->credit }}" parsley-trigger="change" required="" placeholder="Nhập nội dung" class="form-control" id="credit">
                    </div>
                    <div class="form-group">
                    <label for="so_tien">Số tiền<span class="text-danger">*</span></label>
                    <input type="text" name="so_tien" value = "{{ $goicreDit->so_tien }}" parsley-trigger="change" required="" placeholder="Nhập nội dung" class="form-control" id="so_tien">
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Sửa</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
</div>

                    <!-- end col -->
@endsection