@extends('master')

@section('content')
<div class="container" id="login_container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-1 col-md-8 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">E-Mail Address</label>

                            <div class="col-md-5">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">Password</label>

                            <div class="col-md-5">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in" style="padding-right: 5px;"></i>Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4">

            <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.16/clipboard.min.js"></script>
            <style>
            
            p:first-child {
                padding-top: 35px;
            }
            </style>
            <div class="col-md-6 col-md-offset-3 col-sm-12">
                <a class="btn btn-success" id="admin-btn" style="margin-bottom: 20px;">Admin Panel</a>
            </div>
                <div id="admin-log" class="col-md-12 col-xs-12" style="display: none;">
                    <div style="margin-top: 20px;">
                        <h3 class="success" style="display:none; margin-bottom: 15px;">Copied to clipboard</h3>
                        <p>
                            <span id="admin-copy">admin@example.com</span>
                            <button style="font-size: 10px; margin-left: 10px;"class="btn btn-red" data-clipboard-action="copy" data-clipboard-target="#admin-copy" id="admincopy"><i style="padding-right: 5px;" class="fa fa-clipboard" aria-hidden="true"></i>Copy</button>
                            
                        </p>
                        <p>
                            <span id="pass-copy">admin123</span>
                            <button style="font-size: 10px; margin-left: 10px;"class="btn btn-red" data-clipboard-action="copy" data-clipboard-target="#pass-copy" id="passcopy"><i style="padding-right: 5px;"class="fa fa-clipboard" aria-hidden="true"></i>Copy</button>
                        </p>
                    </div> 
                </div>
            </div>

            <script>
                $('#admin-btn').click(function() {
                    $('#admin-log').fadeToggle('slow');
                });
                $('#admincopy, #passcopy').click(function () {
                    $(".success").show().delay(200).fadeOut();
                });
            </script>
            <script>
                var clipboard = new Clipboard('#admincopy');
                var clipboard2 = new Clipboard('#passcopy');
            </script>
        </div>
    </div>
</div>
@endsection
