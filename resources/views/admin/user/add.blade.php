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
            <h1>User</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('') }}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.user.index') }}">User</a>
                </li>
                <li class="active">Add</li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">
                <!--row starts-->
                <div class="row col-md-3"></div>
				
				<div class="col-md-12">
					<!--lg-6 starts-->
					<!--basic form starts-->
					<div class="panel panel-primary" id="hidepanel1">
						<div class="panel-heading">
							<h3 class="panel-title">
							</h3>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" action="{{ route('admin.user.add') }}" method="post">
								@csrf
								<fieldset>
								
									@if ($errors->has('name') || $errors->has('email') || $errors->has('password') )
									<div class="form-group">
										<label class="col-md-3 control-label" for="email"></label>
                                        <div class="col-md-6 alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											
											@if( $errors->has('name') )
												{!! $errors->first('name') . "<br>" !!}
											@endif
											
											@if( $errors->has('email') )
												{!! $errors->first('email') . "<br>"  !!}
											@endif
											
											@if( $errors->has('password') )
												{{ $errors->first('password') }}
											@endif
                                            
                                        </div>
                                    </div>
									@endif
									
									<!-- Email input-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="email">Tên</label>
										<div class="col-md-6">
											<input id="email" name="name" value="{{ old('name') }}" type="text" placeholder="Tên" class="form-control" required>
										</div>
									</div>
									
									<!-- Email input-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="email">E-mail</label>
										<div class="col-md-6">
											<input id="email" name="email" value="{{ old('email') }}" type="text" placeholder="Email" class="form-control" required>
										</div>
									</div>
									
									<!-- Name input-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">Password</label>
										<div class="col-md-6">
											<input id="name" name="password" type="password" placeholder="Password" class="form-control" required>
										</div>
									</div>
									
									<!-- Form actions -->
									<div class="form-group">
										<div class="col-md-9 text-right">
											<button type="submit" class="btn btn-responsive btn-primary btn-sm">Add</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
					
					
				</div>
            </div>

            <!--main content ends-->
        </section>
        <!-- content -->
    </aside>

@endsection


@section('js')

    <!-- begining of page level js -->
    <script src="{{ asset('HTML') }}/vendors/favicon/favicon.js"></script>
    <script src="{{ asset('HTML') }}/vendors/jasny-bootstrap/js/jasny-bootstrap.js"></script>
    <script src="{{ asset('HTML') }}/vendors/iCheck/js/icheck.js"></script>
    <script src="{{ asset('HTML') }}/js/pages/form_examples.js"></script>

    <!-- end of page level js -->

    
@endsection