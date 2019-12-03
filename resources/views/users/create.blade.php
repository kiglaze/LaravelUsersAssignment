@extends('layout')

@section('content')
    <h1>Create User</h1>

    {{ Form::open() }}
        <div>
            {{ Form::label('name', 'Name: ') }}
            {{ Form::text('name') }}
        </div>

        <div>
            {{ Form::label('email', 'Email: ') }}
            {{ Form::text('email') }}
        </div>

        <div>
            {{ Form::submit('Add New User') }}
        </div>
    {{ Form::close() }}
@endsection
