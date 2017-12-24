@extends('layouts.main')

@section('content')
<div class="action-bar top">
    <div class="buttons">
        <a href="{{ route('topic.create') }}" class="button icon-button post-icon" title="Post a new topic">New Topic</a>
    </div>
    <div>
        {{ $topics->render() }}
        <div class="clear"></div>
    </div>
</div>
@if(count($topics) == 0)
<li><h4>We have nothing to show yet. Be the first one to <a href="{{ route('topic.create') }}">create a topic</a> and get this rolling!</h4></li>
@else
<div class="forabg">
    <div class="inner">
        <ul class="topiclist">
            <li class="header">
                <dl class="icon">
                    <dt><div class="list-inner">Topic</div></dt>
                    <dd class="posts">Posts</dd>
                    <dd class="lastpost"><span>Last post</span></dd>
                </dl>
            </li>
        </ul>
        <ul class="topiclist forums">
            @foreach($topics as $topic)
            <li class="row">
                <dl class="icon">
                    <dt>
                        <div class="list-inner">
                            <a href="{{ route('topic', $topic->id) }}" class="forumtitle">{{ $topic->title }}</a><br />
                            <span class="topic-by">by <a href="{{ route('profile', $topic->creator->id) }}">{{ $topic->creator->user_name }}</a></span>
                            <div class="responsive-show" style="display: none;">
                                Topics: <strong>{{ count($topic->posts) }}</strong>
                            </div>
                        </div>
                    </dt>
                    <dd class="posts">{{ count($topic->posts) }}</dd>
                    <dd class="lastpost">
                        @if(count($topic->posts) > 0)
                        <span>
                            {{ $topic->last_post->created_at->format('d M Y, H:i') }}<br />
                            by <a href="{{ route('profile', $topic->last_post->author->id) }}" class="username-coloured">{{ $topic->last_post->author->user_name }}</a>
                        </span>
                        @endif
                    </dd>
                </dl>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endif
@include('modules.footer-stats')
@endsection