@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>Edit User Info</h1>
                    {{ Form::model( Auth::user(), ['method' => 'PATCH', 'route' => 'users.updateCurrent'] ) }}
                        @csrf

                        <div class="form-group row">
                            {{ Form::label('name', 'Name: ', ['class' => "col-md-4 col-form-label text-md-right"]) }}

                            <div class="col-md-6">
                                {{ Form::text('name', null, ['class' => 'form-control', 'name' => 'name']) }}

                                <p class="help is-danger">{{ $errors->first('name') }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('email', 'Email: ', ['class' => "col-md-4 col-form-label text-md-right"]) }}

                            <div class="col-md-6">
                                {{ Form::text('email', null, ['class' => 'form-control', 'name' => 'email']) }}

                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('street_address', 'Street Address: ', ['class' => "col-md-4 col-form-label text-md-right"]) }}

                            <div class="col-md-6">
                                {{ Form::text('address[street_address]', null, ['class' => 'form-control', 'name' => 'street_address']) }}

                                @error('street_address')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('city', 'City: ', ['class' => "col-md-4 col-form-label text-md-right"]) }}

                            <div class="col-md-6">
                                {{ Form::text('address[city]', null, ['class' => 'form-control', 'name' => 'city']) }}

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('region', 'State / Region: ', ['class' => "col-md-4 col-form-label text-md-right"]) }}

                            <div class="col-md-6">
                                {{ Form::text('address[region]', null, ['class' => 'form-control', 'name' => 'region']) }}

                                @error('region')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('country', 'Country: ', ['class' => "col-md-4 col-form-label text-md-right"]) }}

                            <div class="col-md-6">
                                {{ Form::text('address[country]', null, ['class' => 'form-control', 'name' => 'country']) }}

                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {{ Form::label('postcode', 'Zip Code: ', ['class' => "col-md-4 col-form-label text-md-right"]) }}

                            <div class="col-md-6">
                                {{ Form::text('address[postcode]', null, ['class' => 'form-control', 'name' => 'postcode']) }}

                                @error('postcode')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {{ Form::submit('Update User Info', ['class' => "btn btn-primary"]) }}
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
