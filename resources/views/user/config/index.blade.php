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
            <h1>Clone Table</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">Clone</a>
                </li>
                <li class="active">Tables</li>
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
                                Clone Table
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-scrollable">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>First Name</td>
                                        <td>Last Name</td>
                                        <td>Username</td>
                                        <td>Status</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Airi Satou</td>
                                        <td>Kelly</td>
                                        <td>Satou124</td>
                                        <td>
                                            <span class="label label-sm label-success">Approved</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Angelica</td>
                                        <td>Ramos</td>
                                        <td>Angelica343</td>
                                        <td>
                                            <span class="label label-sm label-info">Pending</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ashton</td>
                                        <td>Cox</td>
                                        <td>Cox111</td>
                                        <td>
                                            <span class="label label-sm label-warning">Suspended</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Bradley</td>
                                        <td>Greer</td>
                                        <td>Bradley</td>
                                        <td>
                                            <span class="label label-sm label-danger">Blocked</span>
                                        </td>
                                    </tr>
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