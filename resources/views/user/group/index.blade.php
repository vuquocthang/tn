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
            <h1>Group</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('') }}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('uid.index') }}">Uid</a>
                </li>
                <li class="active">Table</li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                    <div class="portlet box primary">
                        <div class="portlet-title">
                            <div class="caption">
                                Group Table
                            </div>
                        </div>
                        <div class="portlet-body">
							<div class="form-group">
								<div class="col-md-3">
                                    <a onclick="return confirm('Chắc chắn xóa ?');" href="" class="btn btn-danger btn_sizes">Xóa Tất Cả</a>
                                </div>
							</div>
							<br>		
									
                            <div class="table-scrollable">
								<table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Uid</td>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($groups as $index => $group)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td><a href="https://fb.com/{{ $group->uid }}" target="_blank">{{ $group->uid }}</a> </td>
                                    </tr>
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