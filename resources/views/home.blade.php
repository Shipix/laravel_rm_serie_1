<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/route1">rouge</a></li>
                <li><a href="/route2">vert</a></li>
                <li><a href="/route3">bleu</a></li>
            </ul>
        </nav>
    </header>
    @if (is_int($mb2) && is_int($mb1) )
    <p>{{$mb1+$mb2}}</p>
    <p>{{$mb1-$mb2}}</p>
    @else
        <p>ils ne sont pas additionable ni soustrayables</p>
    @endif
</body>
</html>