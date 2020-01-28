<html>
<head>
   <style>
    a {
        text-decoration: none;
        color: grey;
        text-align: center;
    }

    a:hover {
        color: black;
    }

    ul {
        list-style: none;
    }
   
   
   </style>

</head>
<body>
<div>
    <ul>
        @foreach ($posts as $post)
        <li>
        <a href="{{ route('posts.show', $post->id)}}">
        <p>{{$post->title}}</p>
        <p>{{$post->description}}</p>
        <p>{{$post->author}}</p>
       </a>
        </li>
        @endforeach
   </ul>
</div>
</body>
</html>

<styles>




</styles>


