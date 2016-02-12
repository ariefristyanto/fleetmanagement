@extends('layouts.dialog')

@section('content')
    <p class="login-box-msg">Sign in to start your session</p>
        <form class="form-signin" method="POST" action="/auth/login" >
            {!! csrf_field() !!}

            <div class="form-group has-feedback">
                <input type="text" id="email" name="email" class="form-control" placeholder="User name" value="{{ old('email') }}" required autofocus/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div><!-- /.col -->
            </div>
        </form>

@endsection