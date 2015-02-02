@extends('layouts.default')

@section('head')
    @parent
    <title>Login Page</title>
@stop


@section('content')
<div class="header">
    <div class="branding">
        {{ HTML::image('images/btn/branding.png','Branding')}}
    </div>
    <div class="menu">
        <a href="/">{{ HTML::image('images/btn/newBook.png','New Book')}}</a>  
    </div>
</div>
<div>
    @if(Session::has('message'))
        <h3 class="text-danger"> {{ Session::get('message') }} </h3>
    @endif
</div>
<div class="login">
    {{ Form::open(['url' => '/user/login']) }} 
        <div>
            {{ Form::text('username', null, array('placeholder'=>'Username'), Input::old('username')) }}
        </div>
        <div>
            {{ Form::password('password', array('placeholder'=>'Password'), Input::old('password')) }}
        </div>
        <div class="login_btn">
            {{ Form::submit('', array('id' => 'login_btn'))}}
        </div>                
    {{ Form::close()}} 
</div>

@stop