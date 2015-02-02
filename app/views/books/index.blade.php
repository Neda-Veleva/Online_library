@extends('layouts.default')

@section('head')
    @parent
    <title>Book List</title>
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
<div class="container">
    @foreach(array_chunk($books->all(), 4) as $row)
        <div class="row">
            @foreach($row as $book)
                <article class="col-md-3">
                    <div class="text-center">
                        <a href="/book/{{$book->id}}">{{HTML::image($book->cover, 'Book Cover', array('class' => 'covers'))}}</a>
                    </div>
                    <ul class="list-unstyled">
                        <li class="text-center">
                            Title: {{ $book->title }}
                        </li>
                        <li class="text-center">
                            Author: {{ $book->author }}
                        </li>
                        <li class="text-center">
                            Pages: {{ $book->page_count }}
                        </li>
                        <li class="text-center">
                            Format: {{ $book->format }}
                        </li>
                        <li class="text-center">
                            ISDN: {{ $book->isbn }}
                        </li>
                        <li class="text-center">
                            Publish Date: {{ Carbon::parse($book->publish_date)->format('m/d/y') }}
                        </li>
                    </ul>
                </article>
            @endforeach
        </div>
    @endforeach    
</div>
<div>
    {{ $books->links() }}
</div>

@stop