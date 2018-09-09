@extends('user.base')

@section('css')
    <!-- page level css -->
    <link href="{{ asset('HTML') }}/css/pages/tables.css" rel="stylesheet" type="text/css" />
    <!--end of page level css-->
@endsection

@section('container')
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>User Table</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('') }}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.user.index') }}">User</a>
                </li>
                <li class="active">Table</li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    @if( session('message') )
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('message') }}
                    </div>
                    @endif

                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                    <div class="portlet box primary">
                        <div class="portlet-title">
                            <div class="caption">
                                User Table
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-scrollable">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <td><b>#</b></td>
                                        <td><b>Tên</b></td>
                                        <td><b>Email</b></td>
                                        
                                        <td><b>Active</b></td>
                                        <td><b>Hành Động</b></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($users as $index => $user)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        
										
                                        <td>
											<form id="usrActive-{{ $user->id }}" action="{{ route('admin.user.active') }}" method="post">
											@csrf
											<input type="hidden" name="user_id" value="{{ $user->id }}" />
											
											<select name="service_type" onchange="$('#usrActive-{{ $user->id }}').submit()" >
												<option value="" >Chọn Gói</option>
												<option value="Trial" {{ $user->service_type == 'Trial' ? 'selected' : '' }}>Trial</option>
												<option value="Beginner" {{ $user->service_type == 'Beginner' ? 'selected' : '' }}>Beginner</option>
												<option value="Starter" {{ $user->service_type == 'Starter' ? 'selected' : '' }}>Starter</option>
												<option value="Business" {{ $user->service_type == 'Business' ? 'selected' : '' }}>Business</option>
												<option value="Beginner3m" {{ $user->service_type == 'Beginner3m' ? 'selected' : '' }}>Beginner 3M</option>
												<option value="Starter3m" {{ $user->service_type == 'Starter3m' ? 'selected' : '' }}>Starter 3M</option>
												<option value="Business3m" {{ $user->service_type == 'Business3m' ? 'selected' : '' }}>Business 3M</option>
											</select>
											</form>
										</td>

                                        <td>
                                            <button class="btn btn-raised btn-danger md-trigger" data-toggle="modal" data-target="#modal-{{ $user->id }}">Xóa</button>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modal-{{ $user->id }}" role="dialog" aria-labelledby="modalLabeldanger">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h4 class="modal-title" id="modalLabeldanger">Bạn chắc chắn muốn xóa ?</h4>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <button class="btn btn-raised btn-danger" onclick="window.location.href='{{ route('admin.user.delete', $user->id) }}'" >Xóa</button>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button class="btn btn-raised btn-success" data-dismiss="modal">Hủy</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END SAMPLE TABLE PORTLET-->
                </div>

            </div>
        </section>
        <!-- content -->
    </aside>
@endsection

