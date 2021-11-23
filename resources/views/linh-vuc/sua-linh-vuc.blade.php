@extends('layout')
@section('main-content')
<div class="row">
                    
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Cập nhật lĩnh vực</h4>
                <form action="{{route('linh-vuc.cap-nhat',['id' => $linhVuc->id])}}" method="POST">
                    {{ csrf_field() }}
               		<div class="form-group">
                    <label for="ten_linh_vuc">Nội dung<span class="text-danger">*</span></label>
                    <input type="text" name="ten_linh_vuc" value = "{{ $linhVuc->ten_linh_vuc }}" parsley-trigger="change" required="" placeholder="Nhập nội dung" class="form-control" id="ten_linh_vuc">
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Sửa</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
</div>

                    <!-- end col -->
@endsection