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
            <h1>Upload Clone</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('') }}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('clone.index') }}">Clone</a>
                </li>
                <li class="active">Upload</li>
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
                            <form class="form-horizontal" action="{{ route('clone.edit', $clone->id) }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <fieldset>

                                    <div class="form-group hide-when-birthday">
                                        <label class="col-md-3 control-label" for="uid">Uid</label>
                                        <div class="col-md-6">
                                            <input id="uid" name="uid" type="text" placeholder="Uid" value="{{ $clone->uid }}" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group hide-when-birthday">
                                        <label class="col-md-3 control-label" for="c_user">c_user</label>
                                        <div class="col-md-6">
                                            <input id="c_user" name="c_user" type="text" placeholder="C_user" value="{{ $clone->c_user }}" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group hide-when-birthday">
                                        <label class="col-md-3 control-label" for="xs">xs</label>
                                        <div class="col-md-6">
                                            <input id="xs" name="xs" type="text" placeholder="Xs" value="{{ $clone->xs }}" class="form-control" required>
                                        </div>
                                    </div>

                                    <!-- Form actions -->
                                    <div class="form-group">
                                        <div class="col-md-9 text-right">
                                            <button type="submit" class="btn btn-responsive btn-primary btn-sm">Submit</button>
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