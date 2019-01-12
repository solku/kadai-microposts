@extends('layouts.app')

@section('content')
    <h1>Edit Profile</h1>
    <div class="row">
        <div class="col-6">
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('introduction', 'Introduction:') !!}
                    {!! Form::textarea('introduction', null, ['class' => 'form-control', 'rows' => '3']) !!}
                </div>
                <div class="d-flex justify-content-end">
                    {!! Form::submit('Save', ['class' => 'btn btn-info']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection