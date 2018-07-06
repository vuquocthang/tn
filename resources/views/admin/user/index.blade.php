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
                                        
                                        {{--<td><b>Hành Động</b></td> --}}
                                        <td><b>Hành Động</b></td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($users as $index => $user)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        
										{{--
                                        <td>
                                            <button class="btn btn-raised btn-warning" onclick="window.location.href='{{ url('admin/user/edit/' . $user->id) }}'">Sửa</button>
                                        </td>--}}

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

