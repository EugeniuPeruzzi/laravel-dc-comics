<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-wrap m-4">
                @foreach ($comics as $item)
                    <div class="card m-4" style="width: 18rem;">
                        <img src="{{ $item->thumb }}" class="card-img-top" alt="...">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $item->price }}</li>
                            <li class="list-group-item">{{ $item->series }}</li>
                            <li class="list-group-item">{{ $item->sale_date }}</li>
                        </ul>
                        <div class="card-body  overflow-auto" style="height: 300px">
                            <p class="card-text ">{{ $item->description }}.</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</body>


</html>
