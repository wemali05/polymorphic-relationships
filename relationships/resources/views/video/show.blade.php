<h3>{{ $video->name}}</h3>

<ul>
    @foreach($video->comments as $comment)
    <li>{{ $comment->body }}</li>
    @endforeach
</ul>