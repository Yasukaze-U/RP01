<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <tytle>Blog</tytle>
    </head>
    <body>
        <div class="top">
            <h1>Blog title</h1>
            <a href="/">back</a>
        </div>
        <div class="post">
            <h2 class="title">{{ $post->title }}</h2>
            <p class="body">{{ $post->body }}</p>
        </div>
    </body>
</html>