@extends('layouts.app')

@section('content')
    <section class="users">
        <h1>Users List</h1>
        @if(count($users))
            <ul class="users-list">
                @foreach($users as $user)
                    <li {{ ((auth()->check()) && (auth()->user()->getAuthIdentifier() === $user->id)) ? "class = current" : "" }}>
                        <p>{{ $user->name }}</p>
                        <p>{{ $user->email }}</p>
                        @if($user->address)
                            <div class="address">
                                <p>{{ $user->address->street_address }}</p>
                                <p>{{ $user->address->city }}, {{ $user->address->region }}</p>
                                <p>{{ $user->address->country }}, {{ $user->address->postcode }}</p>
                            </div>
                        @endif
                    </li>
                @endforeach
            </ul>
        @else
            <p>No users found.</p>
        @endif
    </section>
@endsection
