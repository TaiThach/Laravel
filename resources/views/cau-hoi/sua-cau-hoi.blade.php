@extends('layout')
@section('main-content')

<div class="col-lg-12">
	<div class="card-box">
	    <h4 class="header-title">Bảng Sửa Câu Hỏi</h4>
	    <p class="sub-header">
	        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
	    </p>
	    <form action="{{ Route('cau-hoi.cap-nhat', ['id' => $cauHoi->id]) }}" class="parsley-examples" novalidate="" method = "post">
	    	{{ csrf_field() }}
	        <div class="form-group">
	            <label for="userName">Nội dung<span class="text-danger">*</span></label>
	            <input type="text" name="noi_dung" value = "{{ $cauHoi->noi_dung }}" parsley-trigger="change" required="" placeholder="Nhập nội dung" class="form-control" id="userName">
	        </div>
	        <div class="form-group">
	            <label for="userName">Lĩnh vực<span class="text-danger">*</span></label>
	            <select id="inputState" name="linh_vuc_id"  parsley-trigger="change" class="form-control">
                    @foreach($dsLinhVuc as $linhVuc)
                    <option value ="{{$linhVuc->id}}">{{ $linhVuc->ten_linh_vuc }}</option>
                    @endforeach
                </select>
	        </div>
	        <div class="form-group">
	            <label for="userName">Phương án A<span class="text-danger">*</span></label>
	            <input type="text" name="phuong_an_a" value="{{$cauHoi->phuong_an_a}}" parsley-trigger="change" required="" placeholder="Nhập phương án A" class="form-control" id="userName">
	        </div>
	        <div class="form-group">
	            <label for="userName">Phương án B<span class="text-danger">*</span></label>
	            <input type="text" name="phuong_an_b" value="{{$cauHoi->phuong_an_b}}" parsley-trigger="change" required="" placeholder="Nhập phương án B" class="form-control" id="userName">
	        </div>
	        <div class="form-group">
	            <label for="userName">Phương án C<span class="text-danger">*</span></label>
	            <input type="text" name="phuong_an_c" value="{{$cauHoi->phuong_an_c}}" parsley-trigger="change" required="" placeholder="Nhập phương án C" class="form-control" id="userName">
	        </div>
	        <div class="form-group">
	            <label for="userName">Phương án D<span class="text-danger">*</span></label>
	            <input type="text" name="phuong_an_d" value="{{$cauHoi->phuong_an_d}}" parsley-trigger="change" required="" placeholder="Nhập phương án D" class="form-control" id="userName">
	        </div>
	        <div class="form-group">
	            <label for="userName">Đáp án<span class="text-danger">*</span></label>
	            <input type="text" name="dap_an" value="{{$cauHoi->dap_an}}" parsley-trigger="change" required="" placeholder="Nhập đáp án" class="form-control" id="userName">
	        </div>

	       
	        <div class="form-group">
	            <div class="checkbox checkbox-purple">
	                <input id="checkbox6a" type="checkbox" data-parsley-multiple="checkbox6a">
	                <label for="checkbox6a">
	                    Remember me
	                </label>
	            </div>

	        </div>

	        <div class="form-group text-right mb-0">
	            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
	                Sửa
	            </button>
	            <a href="{{Route('cau-hoi.danh-sach')}}">
	            	<button type="button" class="btn btn-secondary waves-effect">
	                Hủy
	            	</button>
	            </a>
	        </div>

	    </form>
	</div> <!-- end card-box -->
	</div>	
@endsection
@section('asset2')
 <!-- Plugin js-->
<script src="{{ asset('assets/libs/parsleyjs/parsley.min.js') }}"></script>

<!-- Validation init js-->
<script src="{{ asset('assets/js/pages/form-validation.init.js') }}"></script>
@endsection