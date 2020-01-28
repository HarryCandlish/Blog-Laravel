<html>
<body>
<div>
    <ul>
        @foreach ($posts as $post)
        <li>
        <p>{{$post->title}}</p>
        <p>{{$post->text}}</p>
        <p>{{$post->author}}</p>
        </li>
        @endforeach
   </ul>
</div>
</body>
</html>


