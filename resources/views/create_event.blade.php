@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Event</div>

                    <div class="card-body">
                        <form method="POST" action="{{url('/insert_event')}}">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category" class="col-md-4 col-form-label text-md-right">Category</label>
                                <div class="col-md-6">
                                    <select class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" value="{{ old('category') }}" required autofocus>
                                        <option value="Travel">旅游Travel</option>
                                        <option value="Outdoor">户外活动Outdoor</option>
                                        <option value="Sport">体育Sport</option>
                                        <option value="Party">派对Party</option>
                                        <option value="Picnic">郊游Picnic</option>
                                        <option value="Shopping">逛商城Shopping</option>
                                        <option value="Lunch">午餐Lunch</option>
                                        <option value="Dinner">晚餐Dinner</option>
                                        <option value="Technology">IT科研Technology</option>
                                        <option value="Fesitival">民俗文化节庆Fesitival</option>
                                        <option value="Entertainment">文艺活动Entertainment</option>
                                        <option value="Practice">学本事Practice</option>
                                        <option value="Business">投资创业研讨会Business</option>
                                        <option value="Culture">语言文化Culture</option>
                                        <option value="Others">其他Others</option>
                                    </select>
                                    @if ($errors->has('category'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">Date</label>

                                <div class="col-md-6">
                                    <input id="date" type="date" name="calendar" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ old('date') }}" name="calendar" required autofocus>
                                    @if ($errors->has('date'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="starttime" class="col-md-4 col-form-label text-md-right">Start time</label>

                                <div class="col-md-6">
                                    <input id="starttime" type="text" class="form-control{{ $errors->has('starttime') ? ' is-invalid' : '' }}" name="starttime" value="{{ old('starttime') }}" required autofocus>

                                    @if ($errors->has('starttime'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('starttime') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="endtime" class="col-md-4 col-form-label text-md-right">End time</label>

                                <div class="col-md-6">
                                    <input id="endtime" type="text" class="form-control{{ $errors->has('endtime') ? ' is-invalid' : '' }}" name="endtime" value="{{ old('endtime') }}" required autofocus>

                                    @if ($errors->has('endtime'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('endtime') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="place" class="col-md-4 col-form-label text-md-right">Place</label>

                                <div class="col-md-6">
                                    <input id="place" type="text" class="form-control{{ $errors->has('place') ? ' is-invalid' : '' }}" name="place" value="{{ old('place') }}" required autofocus>

                                    @if ($errors->has('place'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="state" class="col-md-4 col-form-label text-md-right">State</label>

                                <div class="col-md-6">
                                    <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" required autofocus>

                                    @if ($errors->has('state'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-6">
                                    <textarea rows="5" id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required></textarea>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create
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
