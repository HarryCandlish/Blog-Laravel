<html>
<head>
   <style>
    li {
        list-style: none;
    }

    h1 {
        text-align: center;
    }

    p {
        text-align: center;
        width:50%;
        position: relative;
        left: 25%;
    }
   
   </style>
</head>

<body>


<div>
 <h1>{{$post->title}}</h1>  
 <p>{{$post->text}}</p>     
 @foreach ($comments as $comment)
        <li>
  
        <p>{{$comment->comment}}</p>

        </li>
        @endforeach 
</div>





</body>



</html>

