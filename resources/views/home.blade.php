@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h1>Edit User Info</h1>
                        {{ Form::model( $user, ['method' => 'PATCH', 'route' => 'users.updateCurrent'] ) }}
                        @csrf

                        <div class="form-group row required">
                            {{ Form::label('name', 'Name: ', ['class' => "col-md-4 col-form-label text-md-right"]) }}

                            <div class="col-md-6">
                                <?php $additionalOptions = ['class' => 'form-control', 'name' => 'name', 'id' => 'name']; ?>
                                @error('name')
                                    <?php $additionalOptions['class'] .= ' is-invalid'; ?>
                                @enderror
                                {{ Form::text('name', null, $additionalOptions) }}
                                @error('name')
                                    <span class="error-message" role="alert">
                                        <p>{{ $errors->first('name') }}</p>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row required">
                            {{ Form::label('email', 'Email: ', ['class' => "col-md-4 col-form-label text-md-right", 'name' => 'email', 'id' => 'email']) }}

                            <div class="col-md-6">
                                <?php $additionalOptions = ['class' => 'form-control', 'name' => 'email']; ?>
                                @error('email')
                                    <?php $additionalOptions['class'] .= ' is-invalid'; ?>
                                @enderror
                                {{ Form::text('email', null, $additionalOptions) }}
                                @error('email')
                                    <span class="error-message" role="alert">
                                        <p>{{ $errors->first('email') }}</p>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row required">
                            {{ Form::label('street_address', 'Street Address: ', ['class' => "col-md-4 col-form-label text-md-right"]) }}

                            <div class="col-md-6">
                                <?php $additionalOptions = ['class' => 'form-control', 'name' => 'street_address', 'id' => 'street_address']; ?>
                                @error('street_address')
                                    <?php $additionalOptions['class'] .= ' is-invalid'; ?>
                                @enderror
                                {{ Form::text('address[street_address]', old('street_address'), $additionalOptions) }}
                                @error('street_address')
                                    <span class="error-message" role="alert">
                                        <p>{{ $errors->first('street_address') }}</p>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row required">
                            {{ Form::label('city', 'City: ', ['class' => "col-md-4 col-form-label text-md-right"]) }}

                            <div class="col-md-6">
                                <?php $additionalOptions = ['class' => 'form-control', 'name' => 'city', 'id' => 'city']; ?>
                                @error('city')
                                    <?php $additionalOptions['class'] .= ' is-invalid'; ?>
                                @enderror
                                {{ Form::text('address[city]', old('city'), $additionalOptions) }}
                                @error('city')
                                    <span class="error-message" role="alert">
                                        <p>{{ $errors->first('city') }}</p>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row required">
                            {{ Form::label('region', 'State / Region: ', ['class' => "col-md-4 col-form-label text-md-right"]) }}

                            <div class="col-md-6">
                                <?php $additionalOptions = ['class' => 'form-control', 'name' => 'region', 'id' => 'region']; ?>
                                @error('region')
                                    <?php $additionalOptions['class'] .= ' is-invalid'; ?>
                                @enderror
                                {{ Form::text('address[region]', old('region'), $additionalOptions) }}
                                @error('region')
                                    <span class="error-message" role="alert">
                                        <p>{{ $errors->first('region') }}</p>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row required">
                            {{ Form::label('country', 'Country: ', ['class' => "col-md-4 col-form-label text-md-right"]) }}

                            <div class="col-md-6">
                                <?php $additionalOptions = ['class' => 'form-control', 'name' => 'country', 'id' => 'country']; ?>
                                @error('country')
                                    <?php $additionalOptions['class'] .= ' is-invalid'; ?>
                                @enderror
                                {{ Form::text('address[country]', old('country'), $additionalOptions) }}
                                @error('country')
                                    <span class="error-message" role="alert">
                                        <p>{{ $errors->first('country') }}</p>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row required">
                            {{ Form::label('postcode', 'Zip Code: ', ['class' => "col-md-4 col-form-label text-md-right"]) }}

                            <div class="col-md-6">
                                <?php $additionalOptions = ['class' => 'form-control', 'name' => 'postcode', 'id' => 'postcode']; ?>
                                @error('postcode')
                                    <?php $additionalOptions['class'] .= ' is-invalid'; ?>
                                @enderror
                                {{ Form::text('address[postcode]', old('postcode'), $additionalOptions) }}
                                @error('postcode')
                                    <span class="error-message" role="alert">
                                        <p>{{ $errors->first('postcode') }}</p>
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
