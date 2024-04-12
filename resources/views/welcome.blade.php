<head>

    <title>BWAiive Blog</title>
</head>

<body>

    <div>
        @foreach($articles as $article)
           <ol><a href="article">{{$article}}</a></ol>
        @endforeach
    </div>
</body>
