@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-5 centrar">
        <div class="card">
            <header class="card-header ">
                <div class="card-header-title  has-text-centered">
                    Registro
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </div>
            </header>
            <div class="card-content">
                <form action="{{route('login')}}" method='post'>
                    {{ csrf_field() }}

                   <div class="field">
                      <label class="label">Nombre</label>
                      <div class="control">
                        <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="name" value="{{ old('name') }}" name='email' placeholder="e.g Juan Perez">
                      </div>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>



                   <div class="field {{ $errors->has('email') ? 'is-danger' : '' }}">
                      <label class="label">email</label>
                      <div class="control">
                        <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="email" value="{{ old('email') }}" name='email' placeholder="e.g hola@empresa.com">
                      </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="field {{ $errors->has('password') ? 'is-danger' : '' }}">
                      <label class="label">Password</label>
                      <div class="control">
                        <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="password" name='password' >
                      </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="field {{ $errors->has('password') ? 'is-danger' : '' }}">
                      <label class="label">Confirmar Password</label>
                      <div class="control">
                        <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="password" name="password_confirmation" >
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

@endsection
