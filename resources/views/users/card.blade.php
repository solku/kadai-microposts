<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>
    <div class="card-body">
        <img class="media-object rounded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt="">
    </div>
</div>
@include('user_follow.follow_button', ['user' => $user])
@if ($user->introduction)
    <div class="mt-4">
        <p>{!! nl2br(e($user->introduction)) !!}</p>
    </div>
@endif