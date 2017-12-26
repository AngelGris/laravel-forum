@extends('layouts.main')

@section('scripts')
<script type="text/javascript">
$(function() {
    $('#picture-upload').click(function(e) {
        e.preventDefault();
        $('#picture').click();
    })
});
</script>
@endsection

@section('content')
<div class="panel bg1 col-12">
    <div class="col-12 col-sm-3 float-left profile-info">
        <img src="{{ $_user->profile_picture_url }}"><br />
        <a href="#" class="btn" data-toggle="modal" data-keyboard="true" data-target="#modal-profile-picture">[Change picture]</a><br />
        <a href="#" class="btn" data-toggle="modal" data-keyboard="true" data-target="#modal-profile-picture-delete">[Delete picture]</a>
    </div>
    <div class="col-12 col-sm-9 float-left">
        <h2>User information</h2>
        <form method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PATCH">
            <fieldset class="fields2">
                <dl>
                    <dt><label for="first_name">First name:</label></dt>
                    <dd>
                        <input type="text" name="first_name" id="first_name" size="25" value="{{ old('first_name', $_user['first_name']) }}" class="inputbox autowidth" title="First name" />
                        @if ($errors->has('first_name'))
                        <br /><span class="error">{{ $errors->first('first_name') }}</span>
                        @endif
                    </dd>
                </dl>
                <dl>
                    <dt><label for="last_name">Last name:</label></dt>
                    <dd>
                        <input type="text" name="last_name" id="last_name" size="25" value="{{ old('last_name', $_user['last_name']) }}" class="inputbox autowidth" title="Last name" />
                        @if ($errors->has('last_name'))
                        <br /><span class="error">{{ $errors->first('last_name') }}</span>
                        @endif
                    </dd>
                </dl>
                <dl>
                    <dt><label for="user_name">User name:</label><br /><span>User name must be between 6 characters and 25 characters long and use only alphanumeric characters.</span></dt>
                    <dd>
                        <input type="text" name="user_name" id="user_name" size="25" maxlength="25" value="{{ old('user_name', $_user['user_name']) }}" class="inputbox autowidth" title="User name" />
                        @if ($errors->has('user_name'))
                        <br /><span class="error">{{ $errors->first('user_name') }}</span>
                        @endif
                    </dd>
                </dl>
                <dl>
                    <dt><label for="email">Email address:</label></dt>
                    <dd>
                        <input type="email" name="email" id="email" size="25" maxlength="100" value="{{ old('email', $_user['email']) }}" class="inputbox autowidth" title="Email address" />
                        @if ($errors->has('email'))
                        <br /><span class="error">{{ $errors->first('email') }}</span>
                        @endif
                    </dd>
                </dl>
                <dl>
                    <dt><label for="signature">Signature:</label></dt>
                    <dd>
                        <input type="text" name="signature" id="signature" size="25" maxlength="100" value="{{ old('signature', $_user['signature']) }}" class="inputbox autowidth" title="Signature" />
                        @if ($errors->has('signature'))
                        <br /><span class="error">{{ $errors->first('signature') }}</span>
                        @endif
                    </dd>
                </dl>
                <dl>
                    <dt><label for="password">Password:</label></dt>
                    <dd><a href="{{ route('profile.password.edit') }}">[Change password]</a></dd>
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
<div class="modal fade" id="modal-profile-picture" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Change profile picture</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('profile.picture') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <fieldset class="fields2">
                        <dl>
                            <dt>Picture image</dt>
                            <dd>
                                <a href="#" id="picture-upload"><img src="{{ asset('/img/ic-upload.png') }}"></a>
                                <input type="file" name="picture" id="picture" style="display: none;" />
                            </dd>
                        </dl>
                    </fieldset>
                    <fieldset class="submit-buttons">
                        <input type="submit" name="submit" value="Upload" class="button1 default-submit-action" />
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-profile-picture-delete" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete profile picture</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete yout profile picture?<br /><br />
                <a href="{{ route('profile.picture.delete') }}" class="button default-submit-action">I'm sure</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection