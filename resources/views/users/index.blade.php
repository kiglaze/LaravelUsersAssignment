@extends('layout')

@section('content')
    <h1>Users List</h1>
    @foreach($users as $user)
        <p>{{ $user }}</p>
    @endforeach
@endsection
