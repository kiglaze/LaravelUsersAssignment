@extends('layout')

@section('content')
    <h1>Users List</h1>
    @foreach($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
@endsection
