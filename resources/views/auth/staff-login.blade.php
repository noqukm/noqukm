@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading" style="font-size: 20px; color: #000000"> Staff Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('staff.login.submit') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('staff_id') ? ' has-error' : '' }}">
                            <label for="staff_id" class="col-md-4 control-label" style="font-size: 15px; color: #000000;">Staff ID</label>

                            <div class="col-md-6">
                                <input id="staff_id" type="text" class="form-control" name="staff_id" value="{{ old('staff_id') }}" required autofocus>

                                @if ($errors->has('staff_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('staff_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label" style="font-size: 15px; color: #000000;">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label" style="font-size: 15px; color: #000000;">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

        <!--                 <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
 -->
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Login
                                </button>

                               <!--  <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a> -->
                                 <a class="btn btn-link" href="{{ route('login') }}">
                                    Sign-in as Customer
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
