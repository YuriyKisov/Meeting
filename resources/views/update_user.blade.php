@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile update</div>

                    <div class="card-body">
                        <form method="POST" action='{{ url("/edit_user/{$user->id}") }}'>
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Firstname" class="col-md-4 col-form-label text-md-right">First name</label>

                                <div class="col-md-6">
                                    <input id="Firstname" type="text" class="form-control{{ $errors->has('Firstname') ? ' is-invalid' : '' }}" name="Firstname" value="{{ $user->Firstname }}" required>

                                    @if ($errors->has('Firstname'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Firstname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Lastname" class="col-md-4 col-form-label text-md-right">Last name</label>

                                <div class="col-md-6">
                                    <input id="Lastname" type="text" class="form-control{{ $errors->has('Lastname') ? ' is-invalid' : '' }}" name="Lastname" value="{{ $user->Lastname }}" required>

                                    @if ($errors->has('Lastname'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Firstname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Country" class="col-md-4 col-form-label text-md-right">Country</label>

                                <div class="col-md-6">
                                    <input id="Country" type="text" class="form-control{{ $errors->has('Country') ? ' is-invalid' : '' }}" name="Country" value="{{ $user->Country }}" required>

                                    @if ($errors->has('Country'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Country') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="State" class="col-md-4 col-form-label text-md-right">State</label>

                                <div class="col-md-6">
                                    <input id="State" type="text" class="form-control{{ $errors->has('State') ? ' is-invalid' : '' }}" name="State" value="{{ $user->State }}" required>

                                    @if ($errors->has('State'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('State') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="City" class="col-md-4 col-form-label text-md-right">City</label>

                                <div class="col-md-6">
                                    <input id="City" type="text" class="form-control{{ $errors->has('State') ? ' is-invalid' : '' }}" name="City" value="{{ $user->City }}" required>

                                    @if ($errors->has('City'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('City') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Address" class="col-md-4 col-form-label text-md-right">Address</label>

                                <div class="col-md-6">
                                    <input id="Address" type="text" class="form-control{{ $errors->has('State') ? ' is-invalid' : '' }}" name="Address" value="{{ $user->Address }}" required>

                                    @if ($errors->has('Address'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="PostalCode" class="col-md-4 col-form-label text-md-right">Postal Code</label>

                                <div class="col-md-6">
                                    <input id="PostalCode" type="text" class="form-control{{ $errors->has('PostalCode') ? ' is-invalid' : '' }}" name="PostalCode" value="{{ $user->PostalCode }}" required>

                                    @if ($errors->has('PostalCode'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('PostalCode') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Description" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <textarea rows="5" id="Description" type="text" class="form-control{{ $errors->has('Description') ? ' is-invalid' : '' }}" name="Description" value="{{ $user->Description }}" required></textarea>

                                    @if ($errors->has('Description'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>

                                    <a href="{{ url('/dashboard') }}" class="btn btn-secondary">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
