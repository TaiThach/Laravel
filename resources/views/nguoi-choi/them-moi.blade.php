@extends('layout')
@section('main-content')
<div class="row">
                    
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Thêm mới người chơi</h4>
                 @if($errors->any())
                        <div class="alert alert-warning" role="alert">
                                <i class="mdi mdi-alert-outline mr-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đây là một </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">cảnh báo cảnh</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> báo, hãy kiểm tra xem lý do!
                        </font></font>
                                <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                    </div>       
                @endif
                <form action="{{route('nguoi-choi.xl-them-moi')}}" method="POST">
                    @csrf
                     <div class="form-group">
                        <label for="ten_dang_nhap">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" placeholder="ten_dang_nhap">
                    </div>
                     <div class="form-group">
                        <label for="mat_khau">Mật khẩu</label>
                        <input type="text" class="form-control" id="mat_khau" name="mat_khau" placeholder="mat_khau">
                    </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email">
                    </div>
                      <div class="form-group">
                        <label for="hinh_dai_dien">Hình đại diện</label>
                        <input type="text" class="form-control" id="hinh_dai_dien" name="hinh_dai_dien" placeholder="hinh_dai_dien">
                    </div>
                     <div class="form-group">
                        <label for="diem_cao_nhat">Điểm cao nhất</label>
                        <input type="text" class="form-control" id="diem_cao_nhat" name="diem_cao_nhat" placeholder="diem_cao_nhat">
                    </div>

                     <div class="form-group">
                        <label for="credit">Credit</label>
                        <input type="text" class="form-control" id="credit" name="credit" placeholder="credit"> 
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
</div>              <!-- end col -->
@endsection