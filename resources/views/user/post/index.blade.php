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
            <h1>Danh Sách Bài Đăng</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('') }}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('post.index') }}">Bài Đăng</a>
                </li>
                <li class="active">Danh Sách</li>
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
                                        <td>Giờ</td>
										<td>Clone</td>
										<td>Trạng Thái</td>
										<td>Hành Động</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($posts as $index => $post)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
										<td>{{ $post->time }}</td>
                                        <td>
											<a target="_blank" href="https://fb.com/{{ $post->clon3->uid }}">{{ $post->clon3->uid }}</a>
										</td>
										
										<td>{!! $post->status() !!}</td>
										
										<td>
											<a href="{{ route('post.del', $post->id) }}">Xóa</a>
										</td>
                                    </tr>
									@endforeach

                                    </tbody>
                                </table>

                                {{ $posts->links() }}
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