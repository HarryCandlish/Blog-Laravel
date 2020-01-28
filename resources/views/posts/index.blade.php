<html>
<body>
<div>
    <ul>
        @foreach ($posts as $post)
        <li>
        <p>{{$post->title}}</p>
        <p>{{$post->description}}</p>
        <p>{{$post->author}}</p>
        <a href="/:id"><p>{{$post->slug}}</p></a>
        </li>
        @endforeach
   </ul>
</div>
</body>
</html>


