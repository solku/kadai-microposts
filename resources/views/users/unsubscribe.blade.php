@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card', ['user' => $user])
        </aside>
        <div class="col-sm-8 center jumbotron">
            <div class="text-center">
                <h1>Are you sure you want to unsubscribe?</h1>
                {!! link_to_route('users.show', 'No', ['id' => Auth::id()], ['class' => 'btn btn-lg btn-light']) !!}
                {!! link_to_route('signup.get', 'Yes', [], ['class' => 'btn btn-lg btn-danger']) !!}
            </div>
        </div>
    </div>
@endsection
