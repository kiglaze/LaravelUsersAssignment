@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Edit User Info</h1>

                    {{ Form::model( Auth::user(), ['method' => 'PATCH', 'route' => 'users.updateCurrent'] ) }}
                        <div class="field">
                            {{ Form::label('name', 'Name: ') }}
                            <div class="control">
                                {{ Form::text('name') }}
                                <p class="help is-danger">{{ $errors->first('name') }}</p>
                            </div>
                        </div>

                        <div class="field">
                            {{ Form::label('email', 'Email: ') }}
                            <div class="control">
                                {{ Form::text('email') }}
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            </div>
                        </div>

                        <div>
                            {{ Form::submit('Update User Info') }}
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
