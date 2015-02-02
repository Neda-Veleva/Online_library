<!doctype html>
<html lang="en">
    <head>  
        @section('head')
        <meta charset="UTF-8">        
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>   
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=PT+Sans+Narrow" />
        <link rel="stylesheet" type="text/css" href="/styles/style.css">      
        @show
    </head>
    <body>         
        <div class="wrapper">
            @yield('content')
        </div>  
    </body>
</html>
