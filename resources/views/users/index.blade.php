@extends('welcome')

@section('users-list')
    <section class="users">
        <h2>Users List</h2>
        @if(count($users))
            <ul class="users-list @auth user-view-effects @endauth">
                @foreach($users as $user)
                    <li {{ ((auth()->check()) && (auth()->user()->getAuthIdentifier() === $user->id)) ? "class = current" : "" }}>
                        <p>{{ $user->name }}</p>
                        @auth
                            <p>{{ $user->email }}</p>
                            @if($user->address)
                                <div class="address">
                                    <p>{{ $user->address->street_address }}</p>
                                    <p>{{ $user->address->city }}, {{ $user->address->region }}</p>
                                    <p>{{ $user->address->country }}, {{ $user->address->postcode }}</p>
                                </div>
                            @endif
                        @endauth
                    </li>
                @endforeach
            </ul>
        @else
            <p>No users found.</p>
        @endif
    </section>
@endsection
