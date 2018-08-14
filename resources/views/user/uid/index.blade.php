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
            <h1>Uid Table</h1>
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
                                Uid Table
                            </div>
                        </div>
                        <div class="portlet-body">
							<div class="form-group">
								<label class="col-md-3 control-label">Clone</label>
								<div class="col-md-6">
									<select onchange="window.location.href= '{{ url()->current() }}?clone_id=' + this.value " name='clone_id' class="form-control">
										<option style="color: red"  value="all" >All</option>
										
										@foreach($clones as $clone)
										<option style="color: red" value="{{ $clone->id }}" {{ $clone_id == $clone->id ? 'selected' : '' }} >{{ $clone->uid }} <span style="color: red">({{ $clone->note }})</span></option>
										@endforeach
									</select>
								</div>
								
								<div class="col-md-3">
                                    <a onclick="return confirm('Chắc chắn xóa ?');" href="{{ route('uid.delete', \Illuminate\Support\Facades\Input::get('clone_id') ) }}" class="btn btn-danger btn_sizes">Xóa</a>
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

                                    @foreach($uids as $index => $uid)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td><a href="https://fb.com/{{ $uid->uid }}" target="_blank">{{ $uid->uid }}</a> </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                                {{ $uids->appends(request()->query())->links() }}
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