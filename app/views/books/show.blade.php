@extends('layouts.default')

@section('head')
    @parent
    <title>{{$book->title}}</title>
@stop

@section('content')
<div class="header">
    <div class="branding">
        {{ HTML::image('images/btn/branding.png','Branding')}}
    </div>
    <div class="menu">
        <a href="/books">{{ HTML::image('images/btn/allBook.png','All Book')}}</a>
        <a href="/">{{ HTML::image('images/btn/newBook.png','New Book')}}</a>                        
    </div>
</div>     
<div class="container">
    <article>
        <div class="col-md-4">
            {{HTML::image($book->cover, 'Book Cover',array('class' => 'image'))}}
        </div>
        <div>
            <h1>
                Title: {{ $book->title }}
            </h1>
            <h2>
                Author: {{ $book->author }}
            </h2>
            <p>
                Resume:
                <br />
                {{ $book->resume }}
                <br />
                Pages: {{ $book->page_count }}
                <br />
                Format: {{ $book->format }}
                <br />
                ISDN: {{ $book->isbn }}
                <br />
                Publish Date: {{ Carbon::parse($book->publish_date)->format('m/d/y') }}                
            </p>  
        </div>
    </article>     
</div>

@stop