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
            <h1>Keyword</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('') }}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.config.index') }}">Config</a>
                </li>

            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!--main content-->
            <div class="row">
                <!--row starts-->
                <div class="col-md-12">
                    @if( session('message') )
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            {{ session('message') }}
                        </div>
                    @endif

                    <!--lg-6 starts-->
                    <!--basic form starts-->
                    <div class="panel panel-primary" id="hidepanel1">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="{{ route('admin.config.index') }}" method="post">
                                @csrf

                                <fieldset>

                                    @foreach($configs as $config)
                                    <div class="form-group hide-when-birthday">
                                        <label class="col-md-3 control-label" for="{{ $config->name }}">{{ $config->label }}(h)</label>
                                        <div class="col-md-6">
                                            <input id="{{ $config->name }}" value="{{ $config->value }}" name="{{ $config->name }}" type="text" placeholder="{{ $config->label }}" class="form-control" required>
                                        </div>
                                    </div>
                                    @endforeach

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