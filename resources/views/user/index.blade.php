@extends('layouts.main')

@section('content')
<div class="panel bg1 col-12">
    @include('modules.profile-user')
    <div class="col-12 col-sm-9 float-left">
        <h2>User statistics</h2>
        <dl class="details">
            <dt>Joined:</dt> <dd>{{ $user->created_at->diffForHumans() }}</dd>
            <dt>Last active:</dt> <dd>{{ $user->last_activity->diffForHumans() }}</dd>
            <dt>Total topics:</dt>
            <dd><a href="{{ route('profile.topics', $user->id) }}">{{ count($user->topics) }} ({{ $user->percentage_topics }}% of all topics / {{ $user->topics_per_day }} topics per day)</a></dd>
            <dt>Total posts:</dt>
            <dd><a href="{{ route('profile.posts', $user->id) }}">{{ count($user->posts) }} ({{ $user->percentage_posts }}% of all posts / {{ $user->posts_per_day }} posts per day)</a></dd>
            @if(!empty($user->signature))
            <dt>Signature:</dt>
            <dd>{{ $user->signature }}</dd>
            @endif
        </dl>
    </div>
    <div class="clear"></div>
</div>
@endsection