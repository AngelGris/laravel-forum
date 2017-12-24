@extends('layouts.main')

@section('content')
<form method="post" action="{{ route('register') }}" id="register">
    {{ csrf_field() }}
    <div class="panel">
        <div class="inner">
            <h2>Registration</h2>
            <fieldset class="fields2">
                <dl>
                    <dt><label for="first_name">First name:</label></dt>
                    <dd>
                        <input type="text" name="first_name" id="first_name" size="25" value="{{ old('first_name') }}" class="inputbox autowidth" title="First name" />
                        @if ($errors->has('first_name'))
                        <br /><span class="error">{{ $errors->first('first_name') }}</span>
                        @endif
                    </dd>
                </dl>
                <dl>
                    <dt><label for="last_name">Last name:</label></dt>
                    <dd>
                        <input type="text" name="last_name" id="last_name" size="25" value="{{ old('last_name') }}" class="inputbox autowidth" title="Last name" />
                        @if ($errors->has('last_name'))
                        <br /><span class="error">{{ $errors->first('last_name') }}</span>
                        @endif
                    </dd>
                </dl>
                <dl>
                    <dt><label for="user_name">User name:</label><br /><span>User name must be between 6 characters and 25 characters long and use only alphanumeric characters.</span></dt>
                    <dd>
                        <input type="text" name="user_name" id="user_name" size="25" maxlength="25" value="{{ old('user_name') }}" class="inputbox autowidth" title="User name" />
                        @if ($errors->has('user_name'))
                        <br /><span class="error">{{ $errors->first('user_name') }}</span>
                        @endif
                    </dd>
                </dl>
                <dl>
                    <dt><label for="email">Email address:</label></dt>
                    <dd>
                        <input type="email" name="email" id="email" size="25" maxlength="100" value="{{ old('email') }}" class="inputbox autowidth" title="Email address" autocomplete="off" />
                        @if ($errors->has('email'))
                        <br /><span class="error">{{ $errors->first('email') }}</span>
                        @endif
                    </dd>
                </dl>
                <dl>
                    <dt><label for="password">Password:</label><br /><span>Must be between 6 characters and 100 characters.</span></dt>
                    <dd>
                        <input type="password" name="password" id="password" size="25" value="{{ old('password') }}" class="inputbox autowidth" title="Password" autocomplete="off" />
                        @if ($errors->has('password'))
                        <br /><span class="error">{{ $errors->first('password') }}</span>
                        @endif
                    </dd>
                </dl>
                <dl>
                    <dt><label for="password_confirmation">Confirm password:</label></dt>
                    <dd>
                        <input type="password"  name="password_confirmation" id="password_confirmation" size="25" value="{{ old('password_confirmation') }}" class="inputbox autowidth" title="Confirm password" autocomplete="off" />
                        @if ($errors->has('password_confirmation'))
                        <br /><span class="error">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </dd>
                </dl>
            </fieldset>
        </div>
    </div>
    <!--<div class="panel captcha-panel">
        <div class="inner">
            <h3 class="captcha-title">Confirmation of registration</h3>
            <p>To prevent automated registrations the board requires you to enter a confirmation code. The code is displayed in the image you should see below.</p>
            <fieldset class="fields2">
                <dl>
                    <dt><label>Confirmation code:</label><br /><span>In an effort to prevent automatic submissions, we require that you type the text displayed into the field underneath.</span></dt>
                    <dd class="captcha">
                        <script>
                        var RecaptchaOptions = {
                            lang : 'en',
                            theme : 'clean',
                            tabindex : 8        };
                        </script>
                        <script src="http://www.google.com/recaptcha/api/challenge?k=6LdozQITAAAAAGA9ARTLEspYv5hJZu8syBxbWw6f"></script>

                        <noscript>
                        <div>
                            <object data="http://www.google.com/recaptcha/api/noscript?k=6LdozQITAAAAAGA9ARTLEspYv5hJZu8syBxbWw6f" type="text/html" height="300" width="500"></object><br />
                            <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
                            <input type="hidden" name="recaptcha_response_field" value="manual_challenge" />
                        </div>
                        </noscript>

                        <a href="http://www.google.com/intl/en/policies/" target="_blank" class="recaptcha-responsive" style="display: none"><img alt="" width="71" height="36" src="http://www.google.com/recaptcha/api/img/clean/logo.png"></a>
                    </dd>
                </dl>
            </fieldset>
        </div>
    </div>-->
    <div class="panel">
        <div class="inner">
            <fieldset class="submit-buttons">
                <input type="reset" value="Reset" name="reset" class="button2" />&nbsp;
                <input type="submit" tabindex="9" name="submit" id="submit" value="Submit" class="button1 default-submit-action" />
            </fieldset>
        </div>
    </div>
</form>
@endsection
