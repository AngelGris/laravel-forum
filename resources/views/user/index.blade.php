@extends('layouts.main')

@section('content')
<div class="panel bg1 col-12">
    <div class="col-12 col-sm-3 float-left profile-info">
        <img src="{{ $user->profile_picture_url }}">
        <h3>{{ $user->user_name }}</h3>
        @if($_user->id == $user->id)
        <a href="{{ route('profile.edit') }}" class="btn">[Edit profile]</a>
        @endif
    </div>
    <div class="col-12 col-sm-9 float-left">
        <h2>User statistics</h2>
        <dl class="details">
            <dt>Joined:</dt> <dd>{{ $user->created_at->diffForHumans() }}</dd>
            <dt>Last active:</dt> <dd>{{ $user->last_activity->diffForHumans() }}</dd>
            <dt>Total topics:</dt>
            <dd>{{ count($user->topics) }} ({{ $user->percentage_topics }}% of all topics / {{ $user->topics_per_day }} topics per day)</dd>
            <dt>Total posts:</dt>
            <dd>{{ count($user->posts) }} ({{ $user->percentage_posts }}% of all posts / {{ $user->posts_per_day }} posts per day)</dd>
            @if(!empty($user->signature))
            <dt>Signature:</dt>
            <dd>{{ $user->signature }}</dd>
            @endif
        </dl>
    </div>
    <div class="clear"></div>
</div>
@endsection