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
            <h1>Quét UIDS</h1>
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
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                @csrf

                                <fieldset>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Id( Group Id, Post Id, Page Id )</label>
                                        <div class="col-md-6">
                                            <input type="text" name="id" id="fbid" value="863559777168444" class="form-control" required>
                                        </div>
                                    </div>
									
									
									<div class="form-group">
										<label class="col-md-3 control-label">Loại</label>
										<div class="col-md-6">
											<select name='' id="type" class="form-control">
												<option value="1" > Thành Viên </option>
												<option value="2" > Like </option>
												<option value="3" > Comment </option>
											</select>
										</div>
									</div>
									
                                    <!-- Form actions -->
                                    <div class="form-group">
                                        <div class="col-md-9 text-right">
                                            <button type="button" id="scan" class="btn btn-responsive btn-primary btn-sm">Quét</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
			
			<div class="row">
                <div class="col-md-12">
                    
                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                    <div class="portlet box primary">
                        <div class="portlet-title">
                            <div class="caption">
                                Kết Quả <span id="counter">0</span>
                            </div>
                        </div>
						
						
										
                        <div class="portlet-body">
							<div class="row">
								<a type="button" id="export" class="btn btn-responsive btn-danger btn-sm">Lưu Ra File</a>
							</div>
						
                            <div class="table-scrollable">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Uid</td>
									</tr>
                                    </thead>
                                    <tbody id="rtb">
                                    </tbody>
                                </table>

                                
                            </div>
                        </div>
                    </div>
                    <!-- END SAMPLE TABLE PORTLET-->
                </div>

            </div>

            <!--main content ends-->
        </section>
        <!-- content -->
    </aside>
@endsection


@section('js')
	<script>
		
		function __(type, id, after){
			
			let field = "members"
			
			if(type == 2){
				field = "likes"
			}else if(type == 3){
				field = "comments"
			}
			
			let url = "https://graph.facebook.com/" + id + "/" + field + "?after=&pretty=0&limit=5000&after=" + after
			
			console.log(url)
			
			$.get(url , {
				'access_token' : token	
			}, function(r, status){
				console.log(r)
				
				if( type != 3 ){
					r['data'].forEach(function(item, index){
						setTimeout(function(){
							let counterTmp = $("#counter").text()
							
							$("#counter").text( parseInt(counterTmp) + 1)
						
							$("#rtb").append(
								'<tr class="r">' +
								'<td>0</td>' +
								'<td>'+
								'<a data-uid="' + item['id'] + '" href="https://fb.com/' + item['id'] + '" target="_blank">'+ item['name'] +'</a>' +
								'</td>' +
								'</tr>'
							)
						}, 1000)
					})
				}else {
					r['data'].forEach(function(item, index){
						setTimeout(function(){
							let counterTmp = $("#counter").text()
							
							$("#counter").text( parseInt(counterTmp) + 1)
						
							$("#rtb").append(
								'<tr class="r">' +
								'<td>0</td>' +
								'<td>'+
								'<a data-uid="' + item['id'] + '" href="https://fb.com/' + item['id'] + '" target="_blank">'+ item['from']['name'] +'</a>' +
								'</td>' +
								'</tr>'
							)
						}, 1000)
					})
				}
				
				if( r['paging']['cursors']['after'] != null ){
					__(type, id, r['paging']['cursors']['after'])
				}
			}).fail(function(r) {
				console.log(r['status'])
			})
		}
		
		let token = "EAAAAUaZA8jlABACN9a94WcTftl1eHh2UXB3ZAUom53HmW9eHiBgiKNPMmZAdcZBHZBXZApsmGWbcQmcOcZAkeoDe6y7LPZCB510Et1E32vHngb8rIxQEXcaYMIoyhXL6NBNDvXrRYW3XduV3MChhqC1TbWLNqLaZAnVlaUrgtVybqcC3ObayPTxzUXeaxY4LtM7AZD"	
		
		$("#scan").click(function(){
			$("#rtb").empty()
			$("#counter").text(0)
			
			let id = $("#fbid").val()
			
			let type = $("#type").find(":selected").val()
			
			let field = "members"
			
			if(type == 2){
				field = "likes"
			}else if(type == 3){
				field = "comments"
			}
			
			let url = "https://graph.facebook.com/" + id + "/" + field + "?after=&pretty=0&limit=5000"
			
			console.log(url)
			
			$.get(url , {
				'access_token' : token	
			}, function(r, status){
				console.log(r)
				if( type != 3 ){
					r['data'].forEach(function(item, index){
						setTimeout(function(){
							let counterTmp = $("#counter").text()
							
							$("#counter").text( parseInt(counterTmp) + 1)
						
							$("#rtb").append(
								'<tr class="r">' +
								'<td>0</td>' +
								'<td>'+
								'<a data-uid="' + item['id'] + '" href="https://fb.com/' + item['id'] + '" target="_blank">'+ item['name'] +'</a>' +
								'</td>' +
								'</tr>'
							)
						}, 1000)
					})
				}else {
					r['data'].forEach(function(item, index){
						setTimeout(function(){
							let counterTmp = $("#counter").text()
							
							$("#counter").text( parseInt(counterTmp) + 1)
						
							$("#rtb").append(
								'<tr class="r">' +
								'<td>0</td>' +
								'<td>'+
								'<a data-uid="' + item['id'] + '" href="https://fb.com/' + item['id'] + '" target="_blank">'+ item['from']['name'] +'</a>' +
								'</td>' +
								'</tr>'
							)
						}, 1000)
					})
				}
				
				
				if( r['paging']['cursors']['after'] != null ){
					__(type, id, r['paging']['cursors']['after'])
				}
			}).fail(function(r) {
				console.log(r['status'])
			})
		})
	</script>
	
	<!-- Export processing  -->
	<script>
		var exportBtn = document.getElementById('export');
		exportBtn.onclick=function(){
			let datas = '';
		
			$(".r").each(function(){
				let uid = $(this).find('a').first().attr('data-uid')
				
				datas += uid + "\r\n"
			})
			
			//console.log(datas)
		
			var a = document.getElementById("export");
			var file = new Blob([datas], {type: 'text/plain'});
			a.href = URL.createObjectURL(file);
			a.download = "data.txt";
		}
	
	</script>
	<!-- End export -->
@endsection
