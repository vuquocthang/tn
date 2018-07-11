@extends('user.base')

@section('css')
    <!--page level css -->
    <link href="{{ asset('HTML') }}/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
    <link href="{{ asset('HTML') }}/vendors/iCheck/css/all.css" rel="stylesheet" type="text/css" />
    <!--end of page level css-->
	
	<!-- Jquery upload -->
	<!-- Generic page styles -->
	{{-- <link rel="stylesheet" href="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/css/style.css"> --}}
	<!-- blueimp Gallery styles -->
	<link rel="stylesheet" href="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/css/dropzone.css">
	<link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
	<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
	<link rel="stylesheet" href="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/css/jquery.fileupload.css">
	<link rel="stylesheet" href="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/css/jquery.fileupload-ui.css">
	<!-- CSS adjustments for browsers with JavaScript disabled -->
	<noscript><link rel="stylesheet" href="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/css/jquery.fileupload-noscript.css"></noscript>
	<noscript><link rel="stylesheet" href="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/css/jquery.fileupload-ui-noscript.css"></noscript>
	
	<!-- End Jquery upload -->
@endsection

@section('container')

    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>Bài Viết</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('') }}">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('post.index') }}">Bài Viết</a>
                </li>
                <li class="active">Thêm</li>
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
                            <form class="form-horizontal" action="{{ route('post.add') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <fieldset>
									<div class="form-group">
										<label class="col-md-2 control-label">Clone</label>
										<div class="col-md-9">
											<select name='clone_id' class="form-control">
												@foreach($clones as $clone)
												<option value="{{ $clone->id }}" >{{ $clone->uid }} <span style="color: red">({{ $clone->note }})</span></option>
												@endforeach
											</select>
										</div>
									</div>
									
									<div class="form-group">
                                        <label class="col-md-2 control-label" for="name">Hẹn giờ</label>
                                        <div class="col-md-9">
                                            <input id="name" name="time" type="text" placeholder="Hẹn giờ. Ví dụ : 22" class="form-control" required>
										</div>
                                    </div>
										
									<div class="form-group">
                                        <label class="col-md-2 control-label" for="message">Nội Dung Text</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control resize_vertical" id="message" name="text" placeholder="Nội dung text" rows="15" required></textarea>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-2 control-label" for="message">File</label>
                                        <div class="col-md-9">
                                            <div class="dropzone" id="my-awesome-dropzone">
											
											</div>
                                        </div>
                                    </div>
									
									{{--
									<div class="form-group">
                                        <label class="col-md-2 control-label" for="message">File</label>
                                        <div class="col-md-9" id="fileupload">
                                            <!-- Redirect browsers with JavaScript disabled to the origin page -->
											<noscript>
												<input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/">
											</noscript>
											<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
											<div class="row fileupload-buttonbar">
												<div class="col-lg-7">
													<!-- The fileinput-button span is used to style the file input field as button -->
													<span class="btn btn-success fileinput-button">
														<i class="glyphicon glyphicon-plus"></i>
														<span>Add files...</span>
													<input type="file" name="files[]" multiple="">
													</span>
													<button type="submit" class="btn btn-primary start">
														<i class="glyphicon glyphicon-upload"></i>
														<span>Start upload</span>
													</button>
													<button type="reset" class="btn btn-warning cancel">
														<i class="glyphicon glyphicon-ban-circle"></i>
														<span>Cancel upload</span>
													</button>
													<button type="button" class="btn btn-danger delete">
														<i class="glyphicon glyphicon-trash"></i>
														<span>Delete</span>
													</button>
													<input type="checkbox" class="toggle">
													<!-- The global file processing state -->
													<span class="fileupload-process"></span>
												</div>
												<!-- The global progress state -->
												<div class="col-lg-5 fileupload-progress fade">
													<!-- The global progress bar -->
													<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
														<div class="progress-bar progress-bar-success" style="width:0%;"></div>
													</div>
													<!-- The extended global progress state -->
													<div class="progress-extended">&nbsp;</div>
												</div>
											</div>
											<!-- The table listing the files available for upload/download -->
											<table role="presentation" class="table table-striped">
												<tbody class="files"></tbody>
											</table>
                                        </div>
                                    </div> --}}
									
									
									
                                    

                                    <!-- Form actions -->
                                    <div class="form-group">
                                        <div class="col-md-11 text-right">
                                            <button type="submit" class="btn btn-responsive btn-primary btn-sm">Thêm</button>
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
	
	<!-- Jquery upload -->
	<!-- The template to display files available for upload -->
	<script id="template-upload" type="text/x-tmpl">
	{% for (var i=0, file; file=o.files[i]; i++) { %}
		<tr class="template-upload fade">
			<td>
				<span class="preview"></span>
			</td>
			<td>
				<p class="name">{%=file.name%}</p>
				<strong class="error text-danger"></strong>
			</td>
			<td>
				<p class="size">Processing...</p>
				<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
			</td>
			<td>
				{% if (!i && !o.options.autoUpload) { %}
					<button class="btn btn-primary start" disabled>
						<i class="glyphicon glyphicon-upload"></i>
						<span>Start</span>
					</button>
				{% } %}
				{% if (!i) { %}
					<button class="btn btn-warning cancel">
						<i class="glyphicon glyphicon-ban-circle"></i>
						<span>Cancel</span>
					</button>
				{% } %}
			</td>
		</tr>
	{% } %}
	</script>
	<!-- The template to display files available for download -->
	<script id="template-download" type="text/x-tmpl">
	{% for (var i=0, file; file=o.files[i]; i++) { %}
		<tr class="template-download fade">
			<td>
				<span class="preview">
					{% if (file.thumbnailUrl) { %}
						<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
					{% } %}
				</span>
			</td>
			<td>
				<p class="name">
					{% if (file.url) { %}
						<a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
					{% } else { %}
						<span>{%=file.name%}</span>
					{% } %}
				</p>
				{% if (file.error) { %}
					<div><span class="label label-danger">Error</span> {%=file.error%}</div>
				{% } %}
			</td>
			<td>
				<span class="size">{%=o.formatFileSize(file.size)%}</span>
			</td>
			<td>
				{% if (file.deleteUrl) { %}
					<button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
						<i class="glyphicon glyphicon-trash"></i>
						<span>Delete</span>
					</button>
					<input type="checkbox" name="delete" value="1" class="toggle">
				{% } else { %}
					<button class="btn btn-warning cancel">
						<i class="glyphicon glyphicon-ban-circle"></i>
						<span>Cancel</span>
					</button>
				{% } %}
			</td>
		</tr>
	{% } %}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
	<script src="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/js/vendor/jquery.ui.widget.js"></script>
	<!-- The Templates plugin is included to render the upload/download listings -->
	<script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
	<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
	<script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
	<!-- The Canvas to Blob plugin is included for image resizing functionality -->
	<script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
	<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- blueimp Gallery script -->
	<script src="https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
	<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
	<script src="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/js/jquery.iframe-transport.js"></script>
	<!-- The basic File Upload plugin -->
	<script src="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/js/jquery.fileupload.js"></script>
	<!-- The File Upload processing plugin -->
	<script src="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/js/jquery.fileupload-process.js"></script>
	<!-- The File Upload image preview & resize plugin -->
	<script src="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/js/jquery.fileupload-image.js"></script>
	<!-- The File Upload audio preview plugin -->
	<script src="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/js/jquery.fileupload-audio.js"></script>
	<!-- The File Upload video preview plugin -->
	<script src="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/js/jquery.fileupload-video.js"></script>
	<!-- The File Upload validation plugin -->
	<script src="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/js/jquery.fileupload-validate.js"></script>
	<!-- The File Upload user interface plugin -->
	<script src="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/js/jquery.fileupload-ui.js"></script>
	
	<script src="{{ asset('HTML/vendors/jQuery-File-Upload')  }}/js/dropzone.js"></script>
	
	<!-- The main application script -->
	
	<script>
		var myDropzone = new Dropzone("div#my-awesome-dropzone", { 
			url: "{{ route('post.upload') }}",
			headers: {
               'X-CSRF-TOKEN': '{!! csrf_token() !!}'
			},
			addRemoveLinks: true
		});
	
	</script>
	
	
	<script>
	
	/*
	 * jQuery File Upload Plugin JS Example
	 * https://github.com/blueimp/jQuery-File-Upload
	 *
	 * Copyright 2010, Sebastian Tschan
	 * https://blueimp.net
	 *
	 * Licensed under the MIT license:
	 * https://opensource.org/licenses/MIT
	 */

	/* global $, window */

	$(function () {
		'use strict';

		// Initialize the jQuery File Upload widget:
		$('#fileupload').fileupload({
			// Uncomment the following to send cross-domain cookies:
			//xhrFields: {withCredentials: true},
			url: '{{ route('post.upload') }}'
		});

		// Enable iframe cross-domain access via redirect option:
		$('#fileupload').fileupload(
			'option',
			'redirect',
			window.location.href.replace(
				/\/[^\/]*$/,
				'/cors/result.html?%s'
			)
		);

		if (window.location.hostname === 'blueimp.github.io') {
			// Demo settings:
			$('#fileupload').fileupload('option', {
				url: '//jquery-file-upload.appspot.com/',
				// Enable image resizing, except for Android and Opera,
				// which actually support image resizing, but fail to
				// send Blob objects via XHR requests:
				disableImageResize: /Android(?!.*Chrome)|Opera/
					.test(window.navigator.userAgent),
				maxFileSize: 999000,
				acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
			});
			// Upload server status check for browsers with CORS support:
			if ($.support.cors) {
				$.ajax({
					url: '//jquery-file-upload.appspot.com/',
					type: 'HEAD'
				}).fail(function () {
					$('<div class="alert alert-danger"/>')
						.text('Upload server currently unavailable - ' +
								new Date())
						.appendTo('#fileupload');
				});
			}
		} else {
			// Load existing files:
			$('#fileupload').addClass('fileupload-processing');
			$.ajax({
				// Uncomment the following to send cross-domain cookies:
				//xhrFields: {withCredentials: true},
				url: $('#fileupload').fileupload('option', 'url'),
				dataType: 'json',
				context: $('#fileupload')[0]
			}).always(function () {
				$(this).removeClass('fileupload-processing');
			}).done(function (result) {
				$(this).fileupload('option', 'done')
					.call(this, $.Event('done'), {result: result});
			});
		}

	});
	
	</script>
	
	
	<!-- End Jquery upload-->
@endsection