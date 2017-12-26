@extends('layouts.main')

@section('content')
<h2 class="faq-title">Search topics and posts</h2>
<div class="panel bg2">
    <div class="inner">
        <div class="search-box search-body" role="search">
            <form action="{{ route('search') }}" method="get">
                <fieldset>
                    <input name="q" type="search" maxlength="128" title="Search for keywords" class="inputbox search" size="30" value="{{ $q }}" placeholder="Search…" />
                    <button class="button icon-button search-icon" type="submit" title="Search">Search</button>
                </fieldset>
            </form>
        </div>
        <div>
            {{ $results->render() }}
        </div>
        <div class="content">
            @forelse($results as $result)
                @if ($result instanceOf \App\Topic)
                <div class="post has-profile bg2">
                    <div class="inner">
                        <div class="postbody">
                            <div>
                                <strong><a href="{{ route('profile', $result->creator->id) }}" class="username-coloured">{{ $result->creator->user_name }}</a></strong> » {{ $result->created_at->format('d M Y, H:i') }}
                                <h3><a href="{{ route('topic', $result->id) }}">{!! $result->title !!}</a></h3>
                                <div class="content">{!! $result->description !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="post has-profile bg2">
                    <div class="inner">
                        <div class="postbody">
                            <div>
                                <strong><a href="{{ route('profile', $result->author->id) }}" class="username-coloured">{{ $result->author->user_name }}</a></strong> » {{ $result->created_at->format('d M Y, H:i') }} in topic <a href="{{ route('topic', $result->topic->id) }}?post={{ $result->id }}#post-{{ $result->id }}">{{ $result->topic->title }}</a>
                                <div class="content topic-post">{!! $result->post !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @empty
            <h4>No results found</h4>
            @endforelse
        </div>
    </div>
</div>
@endsection