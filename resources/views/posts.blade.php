<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CARDS</title>
    @vite('resources/css/app.css')
</head>
<body>
    @foreach($posts as $item)
    <div class="bg-amber-600">
        <div class="card__title">
            <h1>{{$item->title}}</h1>
        </div>
        <div class="card__image">
            <img src={{$item->imageable->path}}>
        </div>
        <div class="card__body">
            <p>{{$item->body}}</p>
        </div>
    </div>
    @endforeach
</body>
</html>