<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    @if(count($hobbies) == 1) 
        I Have one hobbies
    @elseif(count($hobbies > 1)) 
        I Have multiple hobbies
    @else
        I Dont have any hobbies
    @endif
    </body>
</html>