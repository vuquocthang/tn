<!DOCTYPE html>
<html>

<head>
    <title>Tool Nuôi | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{ asset('HTML') }}/css/bootstrap.min.css" rel="stylesheet" />
    <!-- end of global level css -->
    <link href="{{ asset('HTML') }}/vendors/iCheck/css/square/blue.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('HTML') }}/vendors/bootstrapvalidator/css/bootstrapValidator.min.css" rel="stylesheet" />
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('HTML') }}/css/pages/login.css" />
    <!-- end of page level css -->
</head>

<body>
<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
            <div id="container_demo">
                <a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a>
                <a class="hiddenanchor" id="toforgot"></a>
                <div id="wrapper">
                    <div id="login" class="animate form">
                        <form action="{{ route('login') }}" id="authentication" autocomplete="on" method="post">
                            @csrf

                            <h3 class="black_bg">
                                <img width="200px" src="{{ asset('') }}214 x 42.png" alt="Logo">
                                <br>Log In</h3>
                            <div class="form-group ">
                                <label style="margin-bottom:0;" for="email1" class="uname control-label"> <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> E-mail
                                </label>
                                <input id="email1" name="email" placeholder="E-mail" value="{{ old('email') }}" required/>
                                <div class="col-sm-12">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group ">
                                <label style="margin-bottom:0;" for="password" class="youpasswd"> <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Password
                                </label>
                                <input type="password" id="password" name="password" placeholder="Enter a password" required/>
                                <div class="col-sm-12">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="remember-me" id="remember-me" value="remember-me" class="square-blue" /> Keep me logged in
                                </label>
                            </div>
                            <p class="login button">
                                <input type="submit" value="Đăng Nhập" class="btn btn-success" />
                            </p>
                            <p class="change_link">
                                <a href="#toforgot" class="btn btn-responsive botton-alignment btn-warning btn-sm">Quên Mật Khẩu
                                </a>
                                <a href="#toregister" id="signup" class="btn btn-responsive botton-alignment btn-success btn-sm pull-right">Đăng Ký
                                </a>
                            </p>
                        </form>
                    </div>
                    <div id="register" class="animate form">
                        <form action="{{ route('register') }}" id="register_here" autocomplete="on" method="post">
                            
							@csrf
							<h3 class="black_bg">
                                <img width="200px" src="{{ asset('') }}214 x 42.png" alt="Logo">
                                <br>Đăng Ký</h3>
                            <div class="form-group">
                                <label style="margin-bottom:0;" for="first_name" class="youmail">
                                    <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Họ Tên
                                </label>
                                <input id="first_name" name="name" required type="text" placeholder="John" required/>
                            </div>
                            
                            <div class="form-group">
                                <label style="margin-bottom:0;" for="email" class="youmail">
                                    <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> E-mail
                                </label>
                                <input id="email" name="email" placeholder="mysupermail@mail.com" required/>
                            </div>
                            
                            <div class="form-group">
                                <label style="margin-bottom:0;" for="password" class="youpasswd">
                                    <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Mật Khẩu 
                                </label>
                                <input id="password1" name="password" required type="password" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label style="margin-bottom:0;" for="password_confirm" class="youpasswd">
                                    <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Xác Nhận Mật Khẩu
                                </label>
                                <input id="password_confirm" name="password_confirmation" required type="password" placeholder="Confirm password" required/>
                            </div>
							
							<div class="form-group ">
                               <div class="col-sm-12">
                                    @if ($errors->first())
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first() }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
							
                            <p class="signin button">
                                <input type="submit" class="btn btn-success" value="Đăng Ký" />
                            </p>
                            <p class="change_link">
                                <a href="#tologin" class="btn btn-responsive botton-alignment btn-warning btn-sm to_register">Trở Lại
                                </a>
                            </p>
                        </form>
                    </div>
                    <div id="forgot" class="animate form">
                        <form action="index.html" id="reset_pw" autocomplete="on" method="post">
                            <h3 class="black_bg">
                                <img src="{{ asset('HTML') }}/img/logo.png" alt="josh logo">
                                <br>FORGOT PASSWORD</h3>
                            <p>
                                Enter your email address below and we'll send a special reset password link to your inbox.
                            </p>
                            <div class="form-group">
                                <label style="margin-bottom:0;" for="username2" class="youmai">
                                    <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i> Your email
                                </label>
                                <input id="username2" name="username2" placeholder="your@mail.com" />
                            </div>
                            <p class="login button reset_button">
                                <input type="submit" value="Reset Password" class="btn btn-raised btn-success btn-block" />
                            </p>
                            <p class="change_link">
                                <a href="#tologin" class="btn btn-raised btn-responsive botton-alignment btn-warning btn-sm to_register">Back
                                </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="{{ asset('HTML') }}/js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<script src="{{ asset('HTML') }}/vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script src="{{ asset('HTML') }}/vendors/iCheck/js/icheck.js" type="text/javascript"></script>
<script src="{{ asset('HTML') }}/js/pages/login.js" type="text/javascript"></script>
</body>

</html>
