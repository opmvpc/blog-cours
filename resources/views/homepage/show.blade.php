<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$article->title}}</h1>

    <dl>
        <dt>Text:</dt>
        <dd>{{$article->body}}</dd>
        <dt>Date publication:</dt>
        <dd>{{$article->published_at->diffForHumans()}}
    </dl>

</body>
</html>
