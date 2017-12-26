@extends('layouts.main')

@section('content')
<div class="panel bg1 col-12">
    <div class="col-12 col-sm-3 float-left profile-info">
        <img src="{{ $_user->profile_picture_url }}">
        <h3>{{ $_user->user_name }}</h3>
        <a href="{{ route('profile.edit') }}" class="btn">[Edit profile]</a>
    </div>
    <div class="col-12 col-sm-9 float-left">
        <h2>Change password</h2>
        <form method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PATCH">
            <fieldset class="fields2">
                <dl>
                    <dt><label for="old_password">Old password:</label></dt>
                    <dd>
                        <input type="password" name="old_password" id="old_password" size="25" value="{{ old('old_password') }}" class="inputbox autowidth" title="Old password" autocomplete="off" />
                        @if ($errors->has('old_password'))
                        <br /><span class="error">{{ $errors->first('old_password') }}</span>
                        @endif
                    </dd>
                </dl>
                <dl>
                    <dt><label for="new_password">New password:</label><br /><span>Must be between 6 characters and 100 characters.</span></dt>
                    <dd>
                        <input type="password" name="new_password" id="new_password" size="25" value="{{ old('new_password') }}" class="inputbox autowidth" title="New password" autocomplete="off" />
                        @if ($errors->has('new_password'))
                        <br /><span class="error">{{ $errors->first('new_password') }}</span>
                        @endif
                    </dd>
                </dl>
                <dl>
                    <dt><label for="new_password_confirmation">New password confirmation:</label></dt>
                    <dd>
                        <input type="password"  name="new_password_confirmation" id="new_password_confirmation" size="25" value="{{ old('new_password_confirmation') }}" class="inputbox autowidth" title="Confirm new password" autocomplete="off" />
                        @if ($errors->has('new_password_confirmation'))
                        <br /><span class="error">{{ $errors->first('new_password_confirmation') }}</span>
                        @endif
                    </dd>
                </dl>
            </fieldset>
            <fieldset class="submit-buttons">
                <input type="reset" value="Reset" name="reset" class="button2" />&nbsp;
                <input type="submit" name="submit" id="submit" value="Submit" class="button1 default-submit-action" />
            </fieldset>
        </form>
    </div>
    <div class="clear"></div>
</div>
@endsection