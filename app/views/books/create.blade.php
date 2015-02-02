@extends('layouts.default')

@section('head')
    @parent
    <title>Home Page</title>
@stop

@section('content')
<div class="header">
    <div class="branding">
        {{ HTML::image('images/btn/branding.png','Branding')}}
    </div>
    <div class="menu">
        <a href="/books">{{ HTML::image('images/btn/allBook.png','All Book')}}</a>
        <a href="/user/login">{{ HTML::image('images/btn/login.png','Login')}}</a> 
    </div>
</div> 
<div>
    @if(Session::has('message'))
        <h3 class="text-danger"> {{ Session::get('message') }} </h3>
    @endif
</div>
<div>
    @if($errors->has())    
    <ul>
        @foreach ($errors->all() as $error)
            <li class="text-danger">{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</div>
{{ Form::open(array('url' => '/', 'files' => true)) }} 

    <div class="clearfix">
        <div class="left pull-left">
            <div>
                {{ Form::text('title', null, array('placeholder'=>'Book title'), Input::old('title')) }}
            </div>
            <div>
                {{ Form::text('author', null, array('placeholder'=>'Author'), Input::old('author')) }}
            </div>
        </div>
        <div class="right pull-right">
            <div>
                {{ Form::text('publish_date', null, array('id'=>'datepicker', 'placeholder'=>'Publish Date'), Input::old('publish_date')) }}
            </div>
            <div> 
                {{ Form::select('format', array('0' => 'Select Format', 'A3' => 'A3', 'A4' => 'A4', 'A5' => 'A5'), '0'); }}
            </div>
        </div>
        <div class="left pull-left">
            <div>
                {{ Form::text('page_count', null, array('placeholder'=>'Page Count'), Input::old('page_count')) }}
            </div>
            <div>
                {{ Form::text('isbn', null, array('placeholder'=>'ISBN'), Input::old('isbn')) }}
            </div>
        </div>
        <div class="right pull-right">
            {{ Form::textarea('resume', null, array('placeholder'=>'Resume'), Input::old('resume')) }}
        </div>
    </div>
    <div>
        <ul class="list-inline"> 
            <li class="pull-left">
                {{ HTML::image('/images/btn/upload.png') }}
            </li>
            <li class="pull-left">
                {{ Form::file('cover', null, array('placeholder'=>'Browse...'), Input::old('cover')) }}
            </li>
            <li class="pull-right">
                {{ Form::submit('')}} 
            </li>                                             
        </ul>
    </div>

{{ Form::close()}}

<script>
    $(function() {
      $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "1900:2050",
        dateFormat: "yy/mm/dd"
      });
    });
</script>


@stop