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
                    <a href="{{ route('admin.keyword.index') }}">Keyword</a>
                </li>
                <li class="active">Add</li>
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
                            <form class="form-horizontal" action="{{ route('admin.keyword.add') }}" method="post">
                                @csrf

                                <fieldset>

                                    <div class="form-group" id="type">
                                        <label class="col-md-3 control-label" >Loại</label>
                                        <div class="col-md-6">
                                            <select onchange=" _remove(); if(this.value == 'birthday' || this.value == 'schedule_message'){ document.getElementsByClassName('hide-when-birthday')[0].remove() }else{ _append() } " c class="form-control" name="type" required>
                                                <option >Loại</option>
                                                <option value="message">Tin Nhắn</option>
                                                <option value="schedule_message">Tin Nhắn Hẹn Giờ</option>
                                                <option value="comment">Bình Luận</option>
                                                <option value="birthday">Chúc Mừng Sinh Nhật</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!--
                                    <div class="form-group hide-when-birthday">
                                        <label class="col-md-3 control-label" for="key">Keyword</label>
                                        <div class="col-md-6">
                                            <input id="key" name="key" type="text" placeholder="Keyword" class="form-control" required>
                                        </div>
                                    </div>-->

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="message">Nội dung</label>
                                        <div class="col-md-6">
                                            <textarea class="form-control resize_vertical" id="message" name="value" placeholder="Nội dung ..." rows="5" required></textarea>
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

    <script>
        function _remove() {
            $('.hide-when-birthday').remove()
        }

        function _append() {
            $("<div class=\"form-group hide-when-birthday\">\n" +
                "                                        <label class=\"col-md-3 control-label\" for=\"key\">Keyword</label>\n" +
                "                                        <div class=\"col-md-6\">\n" +
                "                                            <input id=\"key\" name=\"key\" type=\"text\" placeholder=\"Keyword\" class=\"form-control\" required>\n" +
                "                                        </div>\n" +
                "                                    </div>").insertAfter("#type");
        }

        _append()
    </script>
@endsection