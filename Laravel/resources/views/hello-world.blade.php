<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <header>
        <ul class="nav">
            @for($i = 0; $i < 6; $i++)
                <li>
                    @if($i % 2 == 0)
                        <h2>#{{$i}} - Hello Laravel!</h2>
                    @else
                        <h2 class="shadow2">#{{$i}} - Hello Laravel!</h2>
                    @endif
                </li>
            @endfor
        </ul>
    </header>
</body>
</html>