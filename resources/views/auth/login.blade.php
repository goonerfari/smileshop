@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1" style="margin-top: 55px;">
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
        <div class="col-md-3">

            <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

            <div class="col-md-12">
                <a class="btn btn-sm btn-success pull-right" style="margin-top: 55px; margin-bottom: -15px;" id="admin-btn"><h5>Admin Access</h5></a>
            </div>
            <div class="col-md-12">
                <div id="admin-log" style="display: none; margin-left: 5px;">
                    <p style="padding-top: 35px;">admin@example.com</p>
                    <p>admin123</p>
                </div>
            </div>

            <script>
                $('#admin-btn').click(function() {
                    $('#admin-log').fadeToggle('slow');
                });
            </script>
        </div>
    </div>
</div>
@endsection
