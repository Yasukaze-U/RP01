<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Blog title</h1>
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <a href="/posts/{{$post->id}}">
                    <h2 class="title">{{ $post->title }}</h2>
                    </a>
                    <p class="body">{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        
    </body>
</html>