<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--css link-->
    <link rel="stylesheet" href={{ mix('css/app.css') }}>
    <title>Document</title>
</head>

<body>
    <div class="card">
        <div><img src="{{$image}}" alt=""></div>
        <div><a href="">{{$title}}</a></div>
        <div>
            <p>{{$description}}</p>
        </div>
    </div>
</body>

</html>
