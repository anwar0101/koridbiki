@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-addon"> <i class="fa fa-user"></i> </span>
                                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter Your Full Name">
                                </div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                              <div class="input-group">
                                <span class="input-group-addon"> <i class="fa fa-envelope"></i> </span>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Enter Your Email">
                              </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                              <div class="input-group">
                                <span class="input-group-addon"> <i class="fa fa-lock"></i> </span>
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Enter Your Password">
                              </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                              <div class="input-group">
                                <span class="input-group-addon"> <i class="fa fa-lock"></i> </span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Enter Your Password Again">
                              </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="text-right">
                                  <button type="submit" class="btn btn-primary"> <i class="fa fa-user-plus"></i> Register </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
