@extends('layouts.main')

@section('content')
<form action="{{ route('login') }}" method="post" id="login">
    {{ csrf_field() }}
    <div class="panel">
        <div class="inner">
            <div class="content">
                <h2 class="login-title">Login</h2>
                <fieldset class="fields1">
                    <dl>
                        <dt><label for="email">Email address:</label></dt>
                        <dd>
                            <input type="text" name="email" id="email" size="25" value="{{ old('email') }}" class="inputbox autowidth" />
                            @if ($errors->has('email'))
                            <br /><span class="error">{{ $errors->first('email') }}</span>
                            @endif
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password:</label></dt>
                        <dd>
                            <input type="password" id="password" name="password" size="25" class="inputbox autowidth" autocomplete="off" />
                            @if ($errors->has('password'))
                            <br /><span class="error">{{ $errors->first('password') }}</span>
                            @endif
                        </dd>
                        <dd><a href="{{ route('password.request') }}">I forgot my password</a></dd>
                    </dl>
                    <dl>
                        <dd><label for="autologin"><input type="checkbox" name="remember" id="autologin"  {{ old('remember') | true ? 'checked' : '' }} /> Remember me</label></dd>
                    </dl>
                    <dl>
                        <dt>&nbsp;</dt>
                        <dd><input type="submit" name="login" value="Login" class="button1" /></dd>
                    </dl>
                </fieldset>
            </div>
        </div>
    </div>
    <div class="panel">
        <div class="inner">
            <div class="content">
                <h3>Register</h3>
                <p>In order to login you must be registered. Registering takes only a few moments but gives you increased capabilities.</p>
                <hr class="dashed" />
                <p><a href="{{ route('register') }}" class="button2">Register</a></p>
            </div>
        </div>
    </div>
</form>
@endsection
