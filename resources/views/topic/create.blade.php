@extends('layouts.main')

@section('styles')
<!-- Froala WYSIWYG CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.3/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
<!-- Froala WYSIWYG javascript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.3/js/froala_editor.pkgd.min.js"></script>
<!-- Initialize the editor. -->
<script>
$(function() {
    $('textarea').froalaEditor({
        height : 300,
        width : '85%',
    });
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
