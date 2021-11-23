@extends('layout')
@section('css')
<!-- third party css -->
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<!-- third party css end -->
@endsection
@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Danh sách câu hỏi</h4>
                 <a href="{{route('cau-hoi.them-moi')}}">
                    <button type="button" class="btn btn-primary width-xs waves-effect waves-light">Thêm mới</button>
                </a>
                <a href="cau-hoi.xem-linh-vuc-da-xoa">
                 <button type="button" class="btn btn-danger width-xl waves-effect waves-light">Xem lĩnh vực đã xóa</button>
                </a>
                <table id="basic-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>Lĩnh Vực</th>
                            <th>Phương án A</th>
                            <th>Phương án B</th>
                            <th>Phương án C</th>
                            <th>Phương án D</th>
                            <th>Đáp án</th>
                            <th></th>
                        </tr>
                    </thead>
                
                	<tbody>
                		@foreach($dsCauHoi as $cauHoi)
                		<tr>
                			<td>{{$cauHoi->id}}</td>
                			<td>{{$cauHoi->noi_dung}}</td>
                			<td>{{$cauHoi->linh_vuc_id}}</td>
                			<td>{{$cauHoi->phuong_an_a}}</td>
                			<td>{{$cauHoi->phuong_an_b}}</td>
                			<td>{{$cauHoi->phuong_an_c}}</td>
                			<td>{{$cauHoi->phuong_an_d}}</td>
                			<td>{{$cauHoi->dap_an}}</td>
                            <td>
                            <a href="{{ route('cau-hoi.show-cap-nhat', ['id' => $cauHoi->id])}}">
                                    <button type="button" class="btn btn-purple waves-effect waves-light" name ="id"><i class=" mdi mdi-pencil"></i></button> 
                                </a>
                                <a href="{{ route('cau-hoi.xoa', ['id' => $cauHoi->id])}}">
                                    <button type="button" class="btn btn-danger waves-effect waves-light"><i class=" mdi mdi-trash-can-outline"></i></button> </td>
                                </a>
                            </td>
                		</tr>
                		@endforeach
                	</tbody>    
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection

@section('js')
<!-- third party js -->
<script src="{{asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
<!-- third party js ends -->
<!-- Datatables init -->
<script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>
@endsection