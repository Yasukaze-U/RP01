<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Blog title</h1>
        <a href="/posts/create">ポスト作成</a>
        <div class="posts">
            @foreach ($posts as $post)
                <div class="post">
                    <a href="/posts/{{$post->id}}">
                    <h2 class="title">{{ $post->title }}</h2>
                    </a>
                    <p class="body">{{ $post->body }}</p>
                    <a href="/posts/{{$post->id}}/edit">編集</a>
                    <form action="/posts/{{$post->id}}" id="form_{{$post->id}}" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="button" onclick="deletePost({{ $post->id }})">削除</button>
                    </form>
                </div>
            @endforeach
        </div>
        `form_${id}`
        <script>
            function deletePost(id) {
                "use strict"
                
                if (confirm("削除すると復元できません。\n本当に削除しますか？")){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>