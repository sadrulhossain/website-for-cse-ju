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
    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

    <form action="{{ route('admin.password.email') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
      </div>
      

      
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Send Password Reset Link</button>
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
