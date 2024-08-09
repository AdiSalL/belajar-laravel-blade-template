<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .colorful {
            color: #f2f2f2;
            animation-name: gamingLigt;
            animation: gamingLight 10s ease-in-out;
            animation-iteration-count: infinite;
        }

        @keyframes gamingLight {
            0% {
                color: #f2f2f2;
            }
            25% {
                color: red ;
            }
            50% {
                color: green;
            }
            75% {
                color: purple;
            }

            100% {
                color: lightblue;
            }
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <ul>
    @foreach ($hobbies as $hobby)
        <li @class(["", "bold colorful" => $hobby["love"]])>{{$loop->iteration}}. {{ $hobby["name"]}}</li>
    @endforeach
</ul>
</body>
</html>