@extends('user.base')

@section('css')
<!--page level css -->
<link href="{{ asset('HTML') }}/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
<link href="{{ asset('HTML') }}/vendors/iCheck/css/all.css" rel="stylesheet" type="text/css" />
<!--end of page level css-->
@endsection 

@section('container')
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>Chuyên Mục Bài Viết</h1>
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
				<div class="portlet box danger">
					
                    <div class="portlet-title">
                        <div class="caption">
                        </div>
                    </div>
                            
					<div class="portlet-body">
						<a class="btn btn-responsive button-alignment btn-primary " style="margin-bottom:7px;" data-toggle="modal" href="#chuyen-muc-moi" data-href="#chuyen-muc-moi" >Tạo Chuyên Mục Mới</a>
						
						<div class="table-scrollable">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tiêu Đề</th>
                                        <th>Hành Động</th>
                                        <th>Hành Động</th>
                                    </tr>
                                </thead>
                                        
								<tbody>
									@foreach( $user->postCats()->orderBy('created_at', 'desc')->get() as $index => $item )
                                    <tr>
                                        <th class="numberic">{{ $index + 1 }}</th>
                                        <td>{{ $item->title }}</td>
                                        <th><a data-toggle="modal" data-href="#chuyen-muc-sua-{{ $item->id }}" href="#chuyen-muc-sua-{{ $item->id }}">Sửa</a></th>
                                        <th><a href="{{ route('thu-vien.xoa-chuyen-muc', $item->id) }}" onclick="return confirm('Chắc chắn xóa ?')" >Xóa</a></th>
									</tr>
									@endforeach
                                </tbody>
                            </table>
                        </div>
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
		@foreach( $user->postCats()->get() as $index => $item )
                                    
        <div class="modal fade in" id="chuyen-muc-sua-{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="false">
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
                                    <form class="form-horizontal" action="{{ route('thu-vien.sua-chuyen-muc', $item->id) }}" method="post">
                                        <fieldset>
											@csrf
										
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tiêu Đề:</label>
                                                <div class="col-md-10">
                                                    <input id="name" name="title" type="text" value="{{ $item->title }}" placeholder="Tiêu Đề" class="form-control" required>
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
		@endforeach
    <!-- End -->
	
	<!-- Tao chuyen muc moi -->
	<div class="modal fade in" id="chuyen-muc-moi" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Tạo chuyên mục mới</h4>
                    </div>
                        
					<div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel-body">
                                    <form class="form-horizontal" action="{{ route('thu-vien.them-chuyen-muc') }}" method="post">
                                        <fieldset>
											@csrf
											
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tiêu Đề:</label>
                                                <div class="col-md-10">
                                                    <input id="name" name="title" type="text" placeholder="Tiêu Đề" class="form-control" required>
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
	<!-- End tao chuyen muc moi-->
</div>

@endsection @section('js')

<!-- begining of page level js -->
<script src="{{ asset('HTML') }}/vendors/favicon/favicon.js"></script>
<script src="{{ asset('HTML') }}/vendors/jasny-bootstrap/js/jasny-bootstrap.js"></script>
<script src="{{ asset('HTML') }}/vendors/iCheck/js/icheck.js"></script>
<script src="{{ asset('HTML') }}/js/pages/form_examples.js"></script>
<!-- end of page level js -->

@endsection