@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <img class="img-responsive" src="{{ asset('images/logowhite2.png') }}" alt="logo">
                <h2 class="white">Log In</h2>

                        <div class="form-group form-group-lg {{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-8 ">
                                <input id="email" type="email" id="lg" placeholder="EMAIL" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group form-group-lg {{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-8">
                                <input id="password" type="password" id="lg" placeholder="PASSWORD" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 ">
                                <div class="checkbox white">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 ">
                                <button type="submit" class="btn btn-warning btn-block">
                                    Login
                                </button>

                                <a class="btn btn-link white" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
            </form>
        </div>
    </div>
</div>
@endsection
