@extends('layouts.main')

@section('scripts')
<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
<!-- Initialize the editor. -->
<script>
$(function() {
    initWYSIWYG('textarea')
});
</script>
@endsection

@section('content')
<form method="post" action="{{ route('topic.create') }}" id="register">
    {{ csrf_field() }}
    <div class="panel">
        <div class="inner">
            <h2>Create new topic</h2>
            <fieldset class="fields2">
                <dl>
                    <dt><label for="title">Title:</label></dt>
                    <dd>
                        <input type="text" name="title" id="title" size="25" value="{{ old('title') }}" class="inputbox" title="Title" />
                        @if ($errors->has('title'))
                        <br /><span class="error">{{ $errors->first('title') }}</span>
                        @endif
                    </dd>
                </dl>
                <dl>
                    <dt><label for="description">Description:</label></dt>
                    <dd>
                        <textarea name="description" id="description" title="description">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                        <br /><span class="error">{{ $errors->first('description') }}</span>
                        @endif
                    </dd>
                </dl>
            </fieldset>
        </div>
    </div>
    <div class="panel">
        <div class="inner">
            <fieldset class="submit-buttons">
                <input type="reset" value="Reset" name="reset" class="button2" />&nbsp;
                <input type="submit" name="submit" id="submit" value="Submit" class="button1 default-submit-action" />
            </fieldset>
        </div>
    </div>
</form>
@endsection
