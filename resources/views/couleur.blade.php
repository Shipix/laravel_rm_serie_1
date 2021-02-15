<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- {{dd(Str::after( url()->current(),"http://127.0.0.1:8000/couleur/"))}} --}}
    <ul>
        @foreach ($color as $item)
            @if ($item == Str::after( url()->current(),"http://127.0.0.1:8000/couleur/"))

                <li><b>{{$item}}</b></li>

            @else
                <li>{{$item}}</li>
            @endif
        @endforeach
    </ul>
</body>
</html>