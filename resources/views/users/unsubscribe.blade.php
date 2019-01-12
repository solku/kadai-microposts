@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card', ['user' => $user])
        </aside>
        <div class="col-sm-8 center jumbotron">
            <div class="text-center">
                <h1>Are you sure you want to unsubscribe?</h1>
                <div class="d-flex justify-content-center">
                    {!! link_to_route('users.show', 'No', ['id' => $user->id], ['class' => 'btn btn-lg btn-light']) !!}
                    {!! Form::model($user, ['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Yes', ['class' => 'btn btn-lg btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
