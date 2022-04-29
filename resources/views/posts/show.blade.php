<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
           <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
             <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button> 
            </form>
                    <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                    <p class='updateed_at'>{{ $post->updateed_at }}</p>
                    </div>
                    <div class='back'>[<a href='/posts'>back</a>]</div>
       
    </body>
</html>