<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <tytle>Blog</tytle>
    </head>
    <body>
        <div class="top">
            <h1>Blog title</h1>
        </div>
        <form action="/posts" method="POST">
            @csrf
            <div>
                <label for="title">タイトル</label>
                <input type="text" name="post[title]">
            </div>
            <div>
                <label for="body">本文</label>
                <textarea type="text" name="post[body]"></textarea>
            </div>
            <input type="submit" value="送信"/>
        </form>
        <a href="/">back</a>
    </body>
</html>