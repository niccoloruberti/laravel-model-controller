<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>

<main>
    <div class="container">
        <div class="row">
            @foreach($comics as $id => $comic)
            <div class="col-3 my-3">
                <div class="content h-100">
                    <a href="{{ route('show', $comic->id) }}">
                    <div class="card h-100">
                        <img src="{{$comic['thumb']}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic['title']}}</h5>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>

</body>

</html>