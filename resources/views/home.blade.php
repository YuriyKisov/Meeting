@extends('layouts.app')

@section('content')
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">--}}
    <style>
        #app .container .bar .sidenav {
            height: 100%;
            top: 0;
            left: 0;
            display: block;
            background-color: transparent;
            padding-top: 20px;
        }
        #app .container .bar .sidenav a {
            padding: 8px 8px 8px 8px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
        }
        #app .container .bar .sidenav a:hover {
            color: orange;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Hello {{ Auth::user()->name }}!!!This your Dashboard</div>

                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}
                    {{--You are logged in!--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    <div class="row bar">
        <div class="col-md-4 col-xs-4 col-sm-4 sidenav">
            <a href="{{ url('/dashboard') }}">Personal information</a>
            <a href="{{ url('/dashboard') }}">Send message</a>
            <a href="{{ url('/dashboard') }}"">Create event</a>
        </div>
        <div class="col-md-8 col-xs-8 col-sm-8">
            <span>{{ Auth::user()->name }}. Your personal information</span>
            <div class="container">
                <div class="row justify-content-center">

                    @if(session('info'))
                        <div class="alert alert-success">
                            {{session('info')}}
                        </div>
                    @endif

                    <div class="col-md-12">
                        <div class="container">
                            <div class="row">
                                <legend>Profile</legend>
                                <table class="table table-striped table-hover text-center">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href='{{ url("/update_user") }}' class="badge badge-success">Update</a> |
                                            <a href="{{ url('/delete_user') }}" class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <legend>Events</legend>
                                <table class="table table-striped table-hover text-center">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{--@if(count($events) > 0)--}}
                                        {{--@foreach($events->all() as $event)--}}
                                            {{--<tr>--}}
                                                {{--<td>{{ $event->id }}</td>--}}
                                                {{--<td>{{ $event->title }}</td>--}}
                                                {{--<td>{{ $event->description }}</td>--}}
                                                {{--<td>--}}
                                                    {{--<a href='{{ url("/update_event/{$event->id}") }}' class="badge badge-success">Update</a> |--}}
                                                    {{--<a href='{{ url("/delete_event/{$event->id}") }}' class="badge badge-danger">Delete</a>--}}
                                                {{--</td>--}}
                                            {{--</tr>--}}
                                        {{--@endforeach--}}
                                    {{--@endif--}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</body>
@endsection