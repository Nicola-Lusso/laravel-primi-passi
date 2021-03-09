<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Classifica Serie A 2020-2021</h1>
    <ul>
      @foreach($Serie_A as $squadra)
        <li> {{$squadra}} </li>
      @endforeach
    </ul>
</body>
</html>