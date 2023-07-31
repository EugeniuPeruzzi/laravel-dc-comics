@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-wrap m-4">
                @foreach ($comics as $item)
                    <div class="card m-4" style="width: 18rem;">
                        <a href="{{ Route('comics.show', $item->id) }}"><img src="{{ $item->thumb }}" class="card-img-top"
                                alt="..."></a>
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
@endsection
