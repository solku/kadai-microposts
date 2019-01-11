<ul class="media-list">
    @foreach ($microposts as $micropost)
        <li class="media mb-3">
            <img class="media-object rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
            <div class="media-body ml-3">
                <div>
                    {!! link_to_route('users.show', $micropost->user->name, ['id' => $micropost->user->id]) !!} <span class="text-muted">posted at {{ $micropost->created_at }}</span>
                </div>
                <div>
                    <p>{!! nl2br(e($micropost->content)) !!}</p>
                </div>
                <div class="d-flex">
                    @if (Auth::user()->already_favorite($micropost->id))
                        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Unfavorite', ['class' => "btn btn-success"]) !!}
                        {!! Form::close() !!}
                    @else
                        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
                            {!! Form::submit('Favorite', ['class' => "btn"]) !!}
                        {!! Form::close() !!}
                    @endif
                    @if (Auth::id() == $micropost->user_id)
                        {!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $microposts->render('pagination::bootstrap-4') }}