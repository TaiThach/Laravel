@extends('layout')
@section('main-content')
<div class="row">
	<div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 header-title">Thêm mới câu hỏi</h4>
                                @if($errors->any())
                                    <div class="alert alert-warning" role="alert">
                                            <i class="mdi mdi-alert-outline mr-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đây là một </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">cảnh báo cảnh</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> báo, hãy kiểm tra lại quá trình đăng nhập của bạn!
                                        </font></font>
                                            <ul>
                                            @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                        
                                @endif
                                <form action="{{ route('cau-hoi.xl-them-moi') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="noi_dung">Nội dung</label>
                                        <input type="text" class="form-control" id="noi_dung"
                                        name="noi_dung" placeholder="noi_dung">
                                    </div>
                               		<div class="form-group">
                                        <label for="linh_vuc">Lĩnh vực</label>
                                        <select id="linh_vuc" name="linh_vuc" class="form-control">
                                            <option >Chọn lĩnh vực...</option>
                                            @foreach($dsLinhVuc as $linhVuc)
                                            <option value="{{ $linhVuc->id }}">{{ $linhVuc-> ten_linh_vuc }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="phuong_an_a">Phương án A</label>
                                        <input type="text" class="form-control" id="phuong_an_a"
                                        name="phuong_an_a" 
                                        placeholder="phuong_an_a">
                                    </div>
                                    <div class="form-group">
                                        <label for="phuong_an_b">Phương án B</label>
                                        <input type="text" class="form-control" id="phuong_an_b"
                                        name="phuong_an_b" placeholder="phuong_an_b">
                                    </div>
                                    <div class="form-group">
                                        <label for="phuong_an_c">Phương án C</label>
                                        <input type="text" class="form-control" id="phuong_an_c"
                                        name="phuong_an_c" placeholder="phuong_an_c">
                                    </div>
                                    <div class="form-group">
                                        <label for="phuong_an_d">Phương án D</label>
                                        <input type="text" class="form-control" id="phuong_an_d" 
                                        name ="phuong_an_d" placeholder="phuong_an_d">
                                    </div>
                                    <div class="form-group">
                                        <label for="dap_an">Đáp án</label>
                                        <input type="text" class="form-control" id="dap_an" 
                                        name="dap_an" placeholder="dap_an">
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
</div>
@endsection