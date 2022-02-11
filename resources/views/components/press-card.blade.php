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
    <div class="press-card-content">
        <div><img src="{{$image}}" alt="press"></div>
        <div class="press_content">
            <a href="#">{{$title}}</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A est labore, quisquam enim consequuntur.</p>
            <div class="press_button">
                <a href="">More</a>
            </div>
        </div>

    </div>
</body>

</html>
