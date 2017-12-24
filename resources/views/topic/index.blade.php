@extends('layouts.main')

@section('content')
<div id="p9" class="post has-profile bg2">
    <div class="inner">
        <dl class="postprofile" id="profile9">
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
            <div id="post_content9">
                <h3 class="first">{{ $topic->title }}</h3>
                <p class="author">
                    by <strong><a href="{{ route('profile', $topic->creator->id) }}" class="username-coloured">{{ $topic->creator->user_name }}</a></strong> » {{ $topic->created_at->format('d M Y, H:i') }}
                </p>
                <div class="content fr-view">{!! $topic->description !!}</div>
                @if (!empty($topic->creator->signature))
                <div id="sig9" class="signature">{{ $topic->creator->signature }}</div>
                @endif
            </div>
        </div>
        <div class="back2top"><a href="#top" class="top" title="Top">Top</a></div>
    </div>
</div>
@endsection
