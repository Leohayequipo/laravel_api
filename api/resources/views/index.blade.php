<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body class="">
       @foreach($posts as $post)
        <div>
            <h2>{{$post->title}}</h2>
        </div>
       @endforeach
        <!-- la paginacion viene lista con el metodo links (en el controlador PostController esta el metodo paginate)-->
        
        {{ $posts->links() }}
    </body>
</html>
