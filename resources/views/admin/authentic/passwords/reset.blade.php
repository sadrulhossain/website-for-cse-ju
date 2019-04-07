@extends('admin.authentic.app')
@section('title', 'Reset Password')
@section('head')
@include('includes.listcss')
@endsection
@section('body')
<div class="login-box">
  <div class="login-logo">
    <a href=""><img src="{{asset('public/image/logo-v3.png')}}" width="300px" alt="JU logo"><b>Admin</b> Reset Password</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{ route('admin.password.request') }}" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="token" value="{{ $token }}">
      <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ $email or old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('em_confirmationail') }}</strong>
                                    </span>
                                @endif
      </div>
      <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
        <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password"  required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
      </div>
      <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ old('password') }}" placeholder="Password Confirmation"  required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
      </div>

      
        <!-- /.col -->
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Reset Password</button>
        </div>
    </form>

    


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


@endsection
@section('js')
@include('includes.listjs')
@endsection
