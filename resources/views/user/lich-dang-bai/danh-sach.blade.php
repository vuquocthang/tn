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
																	<div class="col-md-8">{!! $schedule->postCat()->first()->title !!}
																	</div>
																	<div class="col-md-2">
																		<a href="#schedule-edit-{{ $schedule->id }}" data-toggle="modal" data-href="#schedule-edit-{{ $schedule->id }}">Sửa</a>
																	</div>
																	<div class="col-md-2">
																		<a style="color: red" onclick="return confirm('Chắc chắn xóa ?')" href="{{ route('lich-dang-bai.xoa', $schedule->id) }}" >Xóa</a>
																	</div>
																</div>
																
																<!-- Them moi lich dang bai modal -->
																<div class="modal fade in" id="schedule-edit-{{ $schedule->id }}" tabindex="-1" role="dialog" aria-hidden="false">
																	<div class="modal-dialog modal-lg">
																		<div class="modal-content">
																			<div class="modal-header">
																				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																				<h4 class="modal-title">Sửa lịch đăng</h4>
																			</div>
																			<div class="modal-body">
																				<div class="row">
																					<div class="col-md-12">
																						<div class="panel-body">
																							<form class="form-horizontal" action="{{ route('thu-vien.sua-lich-dang', $schedule->id) }}" method="post">
																								<fieldset>
																									@csrf
																								
																									<div class="form-group">
																										<label class="col-md-2 control-label">Ngày Hẹn:</label>
																										<div class="col-md-5">
																											<select name="date" class="form-control" required>
																												<option selected="selected" value="1" {{ $schedule->date == "1" ? "selected" : "" }} >Sunday</option>
																												<option value="2" {{ $schedule->date == "2" ? "selected" : "" }}>Monday</option>
																												<option value="3" {{ $schedule->date == "3" ? "selected" : "" }}>Tuesday</option>
																												<option value="4" {{ $schedule->date == "4" ? "selected" : "" }}>Wednesday</option>
																												<option value="5" {{ $schedule->date == "5" ? "selected" : "" }}>Thursday</option>
																												<option value="6" {{ $schedule->date == "6" ? "selected" : "" }}>Friday</option>
																												<option value="7" {{ $schedule->date == "7" ? "selected" : "" }}>Saturday</option>
																											</select>
																										</div>

																										<div class="col-md-5">
																											<select name="hour" class="form-control" required>
																												@for($i=0; $i <24; $i++) 
																													<option value="{{ $i }}" {{ $i== $schedule->hour ? 'selected' : '' }}>{{ $i }}:00</option>
																												@endfor
																											</select>
																										</div>
																									</div>

																									<div class="form-group">
																										<label class="col-md-2 control-label" for="email">Lựa Chọn</label>
																										<div class="col-md-5">
																											<select name="post_cat_id" class="form-control" required>
																												@foreach( $user->postCats()->get() as $index => $item )
																												<option value="{{ $item->id }}" {{ $item->id == $schedule->post_cat_id ? "selected" : "" }} >{{ $item->title }}</option>
																												@endforeach
																											</select>
																										</div>
																									</div>

																									<div class="form-group">
																										<label class="col-md-2 control-label" for="message">Tài Khoản</label>

																										<div class="col-sm-10 pre-scrollable" style="max-height: 180px;">
																											<table class="table table-striped table-hover">
																												<tbody>
																													<tr>
																														<td colspan="3" align="right">
																															<button type="button" id="btnSelectAll{{ $schedule->id }}" class="btn btn-xs btn-info" title="Chọn tất cả Tài khoản">
																																<i class="fa fa-check"></i> Chọn tất cả
																															</button>
																															<button type="button" id="btnSelectNone{{ $schedule->id }}" class="btn btn-xs btn-default" title="Không chọn Tài khoản nào">
																																<i class="fa fa-times"></i> Bỏ tất cả
																															</button>
																														</td>
																													</tr>
																													
																													
																													@foreach($user->clones()->get() as $index => $item)
																													<tr>
																														<td class="text-center">
																															<input type="checkbox" class="itemcheck{{ $schedule->id }}" name="clone_id[]" value="{{ $item->id }}" {{ $schedule->isCloneOfSchedule($user, $item->id) ? 'checked' : '' }} >
																														</td>
																														<td>
																															<a class="" href="https://fb.com/{{ $item->uid }}" target="_blank">{{ $item->note }}</a>
																														</td>
																													</tr>
																													@endforeach

																												</tbody>
																											</table>
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
																<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

																<script>
																	$("#btnSelectAll{{ $schedule->id }}").click(function() {
																		$(".itemcheck{{ $schedule->id }}").each(function() {
																			$(this).prop("checked", true);
																		});
																	});

																	$("#btnSelectNone{{ $schedule->id }}").click(function() {
																		$(".itemcheck{{ $schedule->id }}").each(function() {
																			$(this).prop("checked", false);
																		});
																	});
																
																</script>
																
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