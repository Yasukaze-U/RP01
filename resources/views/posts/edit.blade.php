<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <tytle>Blog</tytle>
    </head>
    <body>
        <div class="top">
            <h1>Blog title</h1>
            <h2>投稿編集</h2>
        </div>
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method("PUT")
            <div>
                <label for="title">タイトル</label>
                <input type="text" name="post[title]" value="{{ $post->title }}">
                <p class="title_error" style="color:red">{{$errors->first("post.title")}}</p>
            </div>
            <div>
                <label for="body">本文</label>
                <textarea type="text" name="post[body]">{{ $post->body }}</textarea>
                <p class="body_error" style="color:red">{{$errors->first("post.body")}}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <a href="/">back</a>
    </body>
</html>