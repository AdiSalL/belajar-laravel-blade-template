<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @forelse($hobbies as $hobby) 
        <p>{{$hobby}}</p>
        @empty
        <h1>No Hobbies</h1>
    @endforelse
</body>
</html>