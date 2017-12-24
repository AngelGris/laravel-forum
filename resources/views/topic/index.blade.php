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
    initWYSIWYG('textarea');
});
</script>
@endsection

@section('content')
<div class="post has-profile bg2">
    <div class="inner">
        <dl class="postprofile">
            <dt class="has-profile-rank has-avatar">
                <div class="avatar-container">
                    <a href="{{ route('profile', $topic->creator->id)}}" class="avatar"><img class="avatar" src="{{ $topic->creator->profile_picture_url }}" alt="Profile picture" width="80" height="80"></a>
                </div>
                <a href="{{ route('profile', $topic->creator->id) }}" class="username-coloured">{{ $topic->creator->user_name }}</a>
            </dt>
            <dd class="profile-posts"><strong>Topics:</strong> <a href="{{ route('profile', $topic->creator->id) }}">{{ count($topic->creator->topics) }}</a></dd>
            <dd class="profile-posts"><strong>Posts:</strong> <a href="{{ route('profile', $topic->creator->id) }}">{{ count($topic->creator->posts) }}</a></dd>
            <dd class="profile-joined"><strong>Joined:</strong> {{ $topic->creator->created_at->diffForHumans() }}</dd>
        </dl>
        <div class="postbody">
            <div>
                <h3 class="first">{{ $topic->title }}</h3>
                <p class="author">
                    by <strong><a href="{{ route('profile', $topic->creator->id) }}" class="username-coloured">{{ $topic->creator->user_name }}</a></strong> » {{ $topic->created_at->format('d M Y, H:i') }}
                </p>
                <div class="content fr-view">{!! $topic->description !!}</div>
                @if (!empty($topic->creator->signature))
                <div class="signature">{{ $topic->creator->signature }}</div>
                @endif
            </div>
        </div>
    </div>
</div>
<div>
    {{ $posts->render() }}
    <div class="clear"></div>
</div>
@foreach($posts as $post)
<div class="post has-profile bg2">
    <div class="inner">
        <dl class="postprofile">
            <dt class="has-profile-rank has-avatar">
                <div class="avatar-container">
                    <a href="{{ route('profile', $post->author->id)}}" class="avatar"><img class="avatar" src="{{ $post->author->profile_picture_url }}" alt="Profile picture" width="80" height="80"></a>
                </div>
                <a href="{{ route('profile', $post->author->id) }}" class="username-coloured">{{ $post->author->user_name }}</a>
            </dt>
            <dd class="profile-posts"><strong>Topics:</strong> <a href="{{ route('profile', $post->author->id) }}">{{ count($post->author->topics) }}</a></dd>
            <dd class="profile-posts"><strong>Posts:</strong> <a href="{{ route('profile', $post->author->id) }}">{{ count($post->author->posts) }}</a></dd>
            <dd class="profile-joined"><strong>Joined:</strong> {{ $post->author->created_at->diffForHumans() }}</dd>
        </dl>
        <div class="postbody">
            <div>
                <div class="content fr-view topic-post">{!! $post->post !!}</div>
                <div class="signature">
                    {{ $post->author->signature }}<br />
                    by <strong><a href="{{ route('profile', $post->author->id) }}" class="username-coloured">{{ $post->author->user_name }}</a></strong> » {{ $post->created_at->format('d M Y, H:i') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<div>
    {{ $posts->render() }}
    <div class="clear"></div>
</div>
<div class="post bg2">
    <div class="inner">
        <h4>Reply to this topic</h4>
        <form method="POST" action="{{ route('post.create') }}">
            {{ csrf_field() }}
            <textarea name="post"></textarea>
            <input type="hidden" name="topic_id" value="{{ $topic->id }}" />
            <input type="submit" name="submit" id="submit" value="Submit" class="button1 default-submit-action" />
        </form>
    </div>
</div>
@endsection
