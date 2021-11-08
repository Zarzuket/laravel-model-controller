<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @foreach ($movies as $movie)
            <div class="card">
                <a href="www.google.com"><h5>{{$movie->title}}</h5></a>
                <p>{{$movie->original_title}}</p>
            </div>
        @endforeach

    </div>
</body>
</html>