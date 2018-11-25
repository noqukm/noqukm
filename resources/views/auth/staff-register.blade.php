@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading" style="font-size: 15px; color: #000000;" >Staff Registration</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('staff.register.submit') }}">
                        {{ csrf_field() }}



                         <div class="form-group{{ $errors->has('staff_id') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label" style="font-size: 15px; color: #000000;">Staff Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

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

                        <div class="form-group{{ $errors->has('staff_id') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label" style="font-size: 15px; color: #000000;">Staff Email</label>

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

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label" style="font-size: 15px; color: #000000;">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Register Staff
                                </button>
                                 <a class="btn btn-link" href="{{ route('register') }}">
                                    Register as Customer
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