@extends('user.base')

@section('css')
<!--page level css -->
<link href="{{ asset('HTML') }}/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
<link href="{{ asset('HTML') }}/vendors/iCheck/css/all.css" rel="stylesheet" type="text/css" />
<!--end of page level css-->


<!--page level css -->
<link rel="stylesheet" type="text/css" href="{{ asset('HTML') }}/vendors/datatables/css/dataTables.bootstrap.css" />
<link href="{{ asset('HTML') }}/css/pages/tables.css" rel="stylesheet" type="text/css" />
<!-- end of page level css-->
@endsection 

@section('container')
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>Lịch Đăng Bài</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('post.index') }}">Bài Viết</a>
            </li>
            <li class="active">Thêm</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <!--row starts-->
            <div class="col-md-12">
				<div class="portlet box primary">
                    <div class="portlet-title">
                        <div class="caption">
                        </div>
                    </div>
                    
					<div class="portlet-body flip-scroll">
                        <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
												<th>Chủ Nhật</th>
                                                <th>Thứ Hai</th>
                                                <th>Thứ Ba</th>
                                                <th>Thứ Tư</th>
                                                <th>Thứ Năm</th>
												<th>Thứ Sáu</th>
												<th>Thứ Bảy</th>
												
                                            </tr>
                                        </thead>
                                        <tbody>
											@for($hour=0; $hour<=23; $hour++)
                                            <tr>
                                                <td>{{ $hour }}:00</td>
                                                
												@for($date=1; $date<=7; $date++)
													<td>
														@if( $user->postCatSchedulesByDateAndHour($date, $hour)->count() > 0 )
															@foreach($user->postCatSchedulesByDateAndHour($date, $hour)->get() as $schedule  )
																<div class="row">
																	<div class="col-md-6">{!! $schedule->postCat()->first()->title !!}
																	</div>
																	<div class="col-md-6">
																		<a style="color: red" onclick="return confirm('Chắc chắn xóa ?')" href="{{ route('lich-dang-bai.xoa', $schedule->id) }}" >Xóa</a><br>
																	</div>
																</div>
															@endforeach
														@endif
													</td>
												@endfor
                                            </tr>
											@endfor
                                            
                                        </tbody>
                                    </table>        
                    </div>
                </div>
            </div>
        </div>
        <!--main content ends-->
    </section>
    <!-- content -->
</aside>

<div class="extended_modals">
    <!-- Them moi lich dang bai modal -->
        <div class="modal fade in" id="sua-bai-viet" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Cập nhật chuyên mục</h4>
                    </div>
                        
					<div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel-body">
                                    <form class="form-horizontal" action="#" method="post">
                                        <fieldset>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tiêu Đề:</label>
                                                <div class="col-md-10">
                                                    <input id="name" name="name" type="text" placeholder="Tiêu Đề" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class=" form-group modal-footer">
                                                <button type="submit" class="btn btn-primary">Lưu Lại</button>
                                                <button type="button" data-dismiss="modal" class="btn btn-default">Hủy Bỏ</button>
                                            </div>
                                        </fieldset>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
    <!-- End -->
</div>

@endsection @section('js')

<!-- begining of page level js -->
<script src="{{ asset('HTML') }}/vendors/favicon/favicon.js"></script>
<script src="{{ asset('HTML') }}/vendors/jasny-bootstrap/js/jasny-bootstrap.js"></script>
<script src="{{ asset('HTML') }}/vendors/iCheck/js/icheck.js"></script>
<script src="{{ asset('HTML') }}/js/pages/form_examples.js"></script>
<!-- end of page level js -->

@endsection