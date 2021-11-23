@extends('layout')
@section('main-content')
<div class="row">              
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Thêm mới gói Credit</h4>
                @if($errors->any())
                    <div class="alert alert-warning" role="alert">
                            <i class="mdi mdi-alert-outline mr-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đây là một </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">cảnh báo cảnh</font></font></strong><font style="    vertical-align: inherit;"><font style="vertical-align: inherit;"> báo, hãy kiểm tra lại quá trình đăng nhập của bạn!
                        </font></font>
                            <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('goi-credit.xl-them-moi')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="ten_goi">Tên gói Credit</label>
                        <input type="text" class="form-control" id="ten_goi" name="ten_goi" placeholder="ten_goi">
                    </div>
               		<div class="form-group">
                        <label for="credit">Credit</label>
                        <input type="text" class="form-control" id="credit" name="credit" placeholder="credit">
                    </div>
                    <div class="form-group">
                        <label for="so_tien">Số tiền</label>
                        <input type="text" class="form-control" id="so_tien" name="so_tien" placeholder="so_tien">
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm</button>
                </form>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
</div>

                    <!-- end col -->
@endsection