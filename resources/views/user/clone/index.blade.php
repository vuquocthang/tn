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
                    <a href="{{ url('') }}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('clone.index') }}">Clone</a>
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
                                Clone Table
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-scrollable">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Uid</td>
										<td>Ghi Chú</td>
										<td>Trạng Thái</td>
										<td>Proxy</td>
                                        <td>Hành Động</td>
                                        <td>Hành Động</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($clones as $index => $clone)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <a href="https://fb.com/{{ $clone->uid }}" target="_blank">{{ $clone->uid }}</a>
                                        </td>
										
										<td>{{ $clone->note }}</td>
										
										<td>{{ $clone->status }}</td>
										<td>{{ $clone->ip . "|" . $clone->port }}|jaejohdi|YqQhmDd8</td>

                                        <td>
                                            <button class="btn btn-raised btn-warning" onclick="window.location.href='{{ route('clone.edit', $clone->id) }}'">Sửa</button>
                                        </td>

                                        <td>
                                            <button class="btn btn-raised btn-danger md-trigger" data-toggle="modal" data-target="#modal-{{ $clone->id }}">Xóa</button>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modal-{{ $clone->id }}" role="dialog" aria-labelledby="modalLabeldanger">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger">
                                                    <h4 class="modal-title" id="modalLabeldanger">Bạn chắc chắn muốn xóa ?</h4>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <button class="btn btn-raised btn-danger" onclick="window.location.href='{{ route('clone.delete', $clone->id) }}'" >Xóa</button>
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

                                {{ $clones->links() }}
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