<h3>{{ $post->name}}</h3>

<ul>
    @foreach($post->comments as $comment)
    <li>{{ $comment->body }}</li>
    @endforeach
</ul>