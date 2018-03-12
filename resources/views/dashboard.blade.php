@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Hello {{ Auth::user()->name }}!!!This your Dashboard</div>
<div class="container">
    <div class="row justify-content-center">

        @if(session('info'))
            <div class="alert alert-success">
                {{session('info')}}
            </div>
        @endif

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container-fluid">
                <div class="row">
                    <legend>Profile</legend>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Your Name</label>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="Name" value="{{ $user->name }}" required autofocus>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Your Email</label>
                        <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required autofocus>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Your Phone</label>
                        <input id="Phone" type="text" class="form-control{{ $errors->has('Phone') ? ' is-invalid' : '' }}" name="Phone" value="{{ $user->Phone }}" required autofocus>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Your First Name</label>
                        <input id="Firstname" type="text" class="form-control{{ $errors->has('Firstname') ? ' is-invalid' : '' }}" name="Firstname" value="{{ $user->Firstname }}" required autofocus>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Your Last Name</label>
                        <input id="Lastname" type="text" class="form-control{{ $errors->has('Lastname') ? ' is-invalid' : '' }}" name="Lastname" value="{{ $user->Lastname }}" required autofocus>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Your Gender</label>
                        <input id="Gender" type="text" class="form-control{{ $errors->has('Gender') ? ' is-invalid' : '' }}" name="Gender" value="{{ $user->Gender }}" required autofocus>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Your Country</label>
                        <input id="Country" type="text" class="form-control{{ $errors->has('Country') ? ' is-invalid' : '' }}" name="Country" value="{{ $user->Country }}" required autofocus>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Your State</label>
                        <input id="State" type="text" class="form-control{{ $errors->has('State') ? ' is-invalid' : '' }}" name="State" value="{{ $user->State }}" required autofocus>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Your City</label>
                        <input id="City" type="text" class="form-control{{ $errors->has('City') ? ' is-invalid' : '' }}" name="City" value="{{ $user->City }}" required autofocus>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Your Address</label>
                        <input id="Address" type="text" class="form-control{{ $errors->has('Address') ? ' is-invalid' : '' }}" name="Address" value="{{ $user->Address }}" required autofocus>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Your Postal Code</label>
                        <input id="PostalCode" type="text" class="form-control{{ $errors->has('PostalCode') ? ' is-invalid' : '' }}" name="PostalCode" value="{{ $user->PostalCode }}" required autofocus>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Description</label>
                        <input id="Description" type="text" class="form-control{{ $errors->has('Description') ? ' is-invalid' : '' }}" name="Description" value="{{ $user->Description }}" required autofocus>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href='{{ url("/update_user") }}' class="badge badge-success">Update</a> |
                        <a href="{{ url('/delete_user') }}" class="badge badge-danger">Delete</a>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 50px">
                        <div class="container-fluid events" style="margin-top: 30px">
                            <legend>Events</legend>
                            @if (count($events) === 0)
                                <div class="container-fluid" style="margin-bottom: 50px">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <p> You don't have any created events!
                                        </p>
                                    </div>
                            @elseif(count($events) > 0)
                                @foreach($events->all() as $event)
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label>Number</label>
                                        <input id="id" type="text" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{ $event->id }}" required autofocus>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label>Title</label>
                                        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ $event->title }}" required autofocus>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label>Date</label>
                                        <input id="date" type="text" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ $event->date }}" required autofocus>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label>Start time</label>
                                        <input id="starttime" type="text" class="form-control{{ $errors->has('starttime') ? ' is-invalid' : '' }}" name="starttime" value="{{ $event->starttime }}" required autofocus>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label>End time</label>
                                        <input id="endtime" type="text" class="form-control{{ $errors->has('endtime') ? ' is-invalid' : '' }}" name="endtime" value="{{ $event->endtime }}" required autofocus>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label>Place</label>
                                        <input id="place" type="text" class="form-control{{ $errors->has('place') ? ' is-invalid' : '' }}" name="place" value="{{ $event->place }}" required autofocus>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label>State</label>
                                        <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ $event->state }}" required autofocus>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label>Description</label>
                                        <input id="Description" type="text" class="form-control{{ $errors->has('Description') ? ' is-invalid' : '' }}" name="Description" value="{{ $event->description }}" required autofocus>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <label>Category</label>
                                        <input id="category" type="text" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ $event->category }}" required autofocus>
                                    </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <a href='{{ url("/update_event/{$event->id}") }}' class="badge badge-success">Update</a> |
                                            <a href='{{ url("/delete_event/{$event->id}") }}' class="badge badge-danger">Delete</a>
                                        </div>
                                @endforeach
                                @else
                                        Здесь нет записей!
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
