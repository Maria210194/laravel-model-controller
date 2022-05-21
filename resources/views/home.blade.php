<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Movies with Laravel</title>
</head>
<body>
    <h1>
        MOVIES:
    </h1>

    <div class="container">

        @foreach ($movies as $movie)

            <div class="card-movie">
                <h3>
                    {{$movie["title"]}}
                </h3>

                <h4>
                    {{$movie["original_title"]}}
                </h4>

                <p>
                    {{$movie["vote"]}}
                </p>
            </div>
        @endforeach

    </div>

</body>
</html>
