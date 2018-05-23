@extends('layouts.default_login')

@section('content')
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>AdComp</h1>
        </div>
        <div class="login-box">
            <form class="login-form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Login</h3>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="control-label">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="control-label">Contraseña</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="utility">
                        <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Olvidaste tu contraseña ?</a></p>
                        <p class="semibold-text mb-2"><a href="{{ route('register') }}">Registrarse</a></p>
                    </div>
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>INGRESAR</button>
                </div>
            </form>
            <form class="forget-form" action="{{ route('password.request') }}">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Olvidaste tu contraseña ?</h3>
                <div class="form-group">
                    <label class="control-label">EMAIL</label>
                    <input class="form-control" type="text" placeholder="Email">
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESETEAR</button>
                </div>
                <div class="form-group mt-3">
                    <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Volver al ingreso</a></p>
                </div>
            </form>
        </div>
    </section>
@endsection
