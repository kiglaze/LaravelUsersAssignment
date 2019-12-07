@extends('layouts.app')

@section('content')
    <section class="welcome">
        <h1>Welcome to Kristin's assignment site</h1>
        @guest
        <p>Please <a href="{{ route('register') }}">create an account</a> or <a href="{{ route('login') }}">log in</a> to view all users. I purposefully limited the users list view to logged in users for security reasons.</p>
        @endguest
        <p>You can only edit the information for a user if you are logged in as that user.</p>
        <p>All user creation through this site comes from registering a new user.</p>
    </section>
@endsection
