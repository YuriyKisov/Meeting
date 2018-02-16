@extends('layouts.app')

{{--@section('content')--}}
    {{--{!! Form::open(['url' => 'ContactUs']) !!}--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Contact Us</div>--}}

                    {{--<div class="panel-body">--}}
                        {{--<form class="form-horizontal" method="POST" action="">--}}
                            {{--{{ csrf_field() }}--}}

                            {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                                {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="name" type="text" class="form-control" name="name" required autofocus>--}}
                                    {{--{{ Form::text('name') }}--}}
                                    {{--@if ($errors->has('name'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email" type="email" class="form-control" name="email" required>--}}
                                    {{--{{ Form::text('email') }}--}}
                                    {{--@if ($errors->has('email'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="title" class="col-md-4 control-label">Title</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="title" type="text" class="form-control" name="title" required autofocus>--}}
                                    {{--{{ Form::text('title') }}--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                {{--<label for="message" class="col-md-4 control-label">Message</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="message" type="text" class="form-control" name="message" required>--}}
                                    {{--{{ Form::textarea('message') }}--}}
                                    {{--@if ($errors->has('message'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('message') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-6 col-md-offset-4">--}}
                                    {{--{{ Form::submit('Send') }}--}}
                                    {{--<button type="submit" class="btn btn-primary">--}}
                                        {{--Send--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}
{{--@endsection--}}

@section('content')
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Contact Us</h4>
                    <form id="contactform" action ="{{ route('sendmail') }}" method="POST" class="validateform">
                        {{ csrf_field() }}

                        <div id="sendmessage">
                            Ваше сообщение отправлено!
                        </div>
                        <div id="senderror">
                            При отправке сообщения произошла ошибка. Продублируйте его, пожалуйста, на почту администратора <span>{{ env('MAIL_ADMIN_EMAIL') }}</span>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 field">
                                <input type="text" name="name" placeholder="* Enter your name" required />
                            </div>
                            <div class="col-lg-4 field">
                                <input type="email" name="mail" placeholder="* Enter your email" required />
                            </div>
                            <div class="col-lg-4 field">
                                <input type="text" name="title" placeholder="* Enter a subject of your message" required />
                            </div>
                            <div class="col-lg-12 margintop10 field">
                                <textarea rows="12" name="message" class="input-block-level" placeholder="* Your message..." required></textarea>
                                <p>
                                    <button class="btn btn-theme margintop10 pull-left" type="submit">Send</button>
                                    {{ csrf_field() }}
                                    <span class="pull-right margintop20">* Please fill in all required fields!</span>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@stop
