@extends('layouts.app')

@section('content')
    <section class="users">
        <h1>Users List</h1>
        @if(count($users))
            <ul class="users-list">
                @foreach($users as $user)
                    <li {{ ((auth()->check()) && (auth()->user()->getAuthIdentifier() === $user->id)) ? "class = current" : "" }}>
                        <p>{{ $user->name }}</p>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No users found.</p>
        @endif
    </section>
@endsection
