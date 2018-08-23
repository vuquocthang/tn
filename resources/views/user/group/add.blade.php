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
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Dashboard
                    </a>
                </li>
                <li class="active">Quét UID</li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">
                <!--row starts-->
                <div class="col-md-12">
                    <!--lg-6 starts-->
                    <!--basic form starts-->
                    <div class="panel panel-primary" id="hidepanel1">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="{{ route('group.add') }}" enctype="multipart/form-data" required>
                                @csrf

                                <fieldset>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Group Id</label>
                                        <div class="col-md-6">
                                            <input type="text" name="uid"  class="form-control" required>
                                        </div>
                                    </div>
									
                                    <!-- Form actions -->
                                    <div class="form-group">
                                        <div class="col-md-9 text-right">
                                            <button type="submit" id="scan" class="btn btn-responsive btn-primary btn-sm">Thêm</button>
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


