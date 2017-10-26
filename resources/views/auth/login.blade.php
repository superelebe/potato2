@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-5 centrar">
        <div class="card">
            <header class="card-header ">
                <div class="card-header-title  has-text-centered">
                    Login
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </div>
            </header>
            <div class="card-content">
                <form action="{{route('login')}}" method='post'>
                    {{ csrf_field() }}
                   <div class="field">
                      <label class="label">email</label>
                      <div class="control">
                        <input class="input" type="email" name='email' placeholder="e.g hola@empresa.com">
                      </div>
                    </div>

                    <div class="field">
                      <label class="label">Password</label>
                      <div class="control">
                        <input class="input" type="password" name='password' >
                      </div>
                    </div>
                    <div class="field">
                      <p class="control">
                        <button class="button is-success">
                          Login
                        </button>
                      </p>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

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
                            <label for="password" class="col-md-4 control-label">Password</label>

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
