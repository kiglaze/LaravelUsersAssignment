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
                                <address-component
                                    street_address="{{ $user->address->street_address }}"
                                    city="{{ $user->address->city }}"
                                    region="{{ $user->address->region }}"
                                    country="{{ $user->address->country }}"
                                    postcode="{{ $user->address->postcode }}">
                                </address-component>
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
