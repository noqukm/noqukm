@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">
                
                  <form class="form-horizontal" method="POST" action="{{ url('/editProfile') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label" style="font-size: 18px; color: #512da8">Enter Name</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('profilepic') ? ' has-error' : '' }}">
                            <label for="v" class="col-md-4 control-label" style="font-size: 18px; color: #512da8;">Profile Picture</label>

                            <div class="col-md-6">
                                <input id="profilepic" type="file" class="form-control" name="profilepic" required>

                                @if ($errors->has('profilepic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profilepic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="v" class="col-md-4 control-label" style="font-size: 18px; color: #512da8;">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="input" class="form-control" name="email" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('changepwd') ? ' has-error' : '' }}">
                            <label for="v" class="col-md-4 control-label" style="font-size: 18px; color: #512da8;">Change Password</label>

                            <div class="col-md-6">
                                <input id="changepwd" type="input" class="form-control" name="changepwd" required>

                                @if ($errors->has('changepwd'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('changepwd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('retypepwd') ? ' has-error' : '' }}">
                            <label for="v" class="col-md-4 control-label" style="font-size: 18px; color: #512da8;">Re-type Password</label>

                            <div class="col-md-6">
                                <input id="retypepwd" type="input" class="form-control" name="retypepwd" required>

                                @if ($errors->has('retypepwd'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('retypepwd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary  ">
                                    Save Profile
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
