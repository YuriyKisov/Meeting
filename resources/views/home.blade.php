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
            <div id="app">
                <template lang="html">
                    <tr>
                        <td>
                            <input type="text"  class="form-control"
                                   v-model="editForm.username" v-if="edit"
                            >
                            {{--<span v-else>{{ user.username }}</span>--}}
                        </td>

                        <td>
                            <input type="text" class="form-control"
                                   v-model="editForm.email" v-if="edit"
                            >
                            {{--<span v-else>{{ user.email }}</span>--}}
                        </td>

                        <td>
                            <button type="button" class="btn btn-info"
                                    v-on:click="editUser" v-if="!edit"
                            >
                                Edit
                            </button>

                            <button type="button" class="btn btn-default"
                                    v-on:click="cancelEdit" v-if="edit"
                            >
                                Cancel
                            </button>

                            <button type="button" class="btn btn-primary"
                                    v-on:click="updateUser(user, editForm)" v-if="edit"
                            >
                                update
                            </button>

                            <button type="button" class="btn btn-danger"
                                    v-on:click="$emit('delete-user', user)" v-if="!edit"
                            >
                                Delete
                            </button>
                        </td>
                    </tr>
                </template>
            </div>
        </div>
    </div>
</div>


    <script src="/js/app.js"></script>
<script>
    export default {
        props:['users'],
        data(){
            return {
                edit: false,
                editForm :{
                    username: '',
                    email: ''
                }
            }
        },

        methods: {
            editUser(){
                this.edit = true;
                this.editForm.username = this.user.username;
                this.editForm.email = this.user.email;
            },
            cancelEdit(){
                this.edit = false;
                this.editForm.username = '';
                this.editForm.email = '';
            },
            updateUser(oldUser, newUser){
                this.$http.patch('/users/' + oldUser.id, newUser).then(response => {
                    this.$emit('update-user');
                this.cancelEdit();
                console.log(response.data);
            }, (response) => {
                    console.log(response.data);
                });
            }
        }
    }
</script>

</body>
@endsection