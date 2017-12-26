@extends('layouts.main')

@section('content')
<div class="panel bg1 col-12">
    @include('modules.profile-user')
    <div class="col-12 col-sm-9 float-left">
        <h2>User's {{ $type }}</h2>
        <div>
            {{ $items->render() }}
            <div class="clear"></div>
        </div>
        @forelse($items as $item)
        @if($type == 'topics')
        <div class="post has-profile bg2">
            <div class="inner">
                <div class="postbody">
                    <div>
                        {{ $item->created_at->format('d M Y, H:i') }}
                        <h3><a href="{{ route('topic', $item->id) }}">{{ $item->title }}</a></h3>
                        <div class="content">{!! $item->description !!}</div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="post has-profile bg2">
            <div class="inner">
                <div class="postbody">
                    <div>
                        {{ $item->created_at->format('d M Y, H:i') }} in topic <a href="{{ route('topic', $item->topic->id) }}?post={{ $item->id }}#post-{{ $item->id }}">{{ $item->topic->title }}</a>
                        <div class="content topic-post">{!! $item->post !!}</div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @empty
        <h4>This user has no {{ $type }}</h4>
        @endforelse
        <div>
            {{ $items->render() }}
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
@endsection