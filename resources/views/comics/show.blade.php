@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="content-image position-relative">
                    <div class="img-container-comics position-relative">
                        <img class="comic-ratio" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <span class="position-absolute top-0 start-0 text-uppercase thumb-background p-1">comic
                            book</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h4 class="card-text-color fw-bolder">{{ $comic->title }}</h4>
                <div class="border border-end-0">
                    <div class=" fw-bolder  aviability py-2 px-4 d-flex justify-content-between">
                        <div class="nested-span">
                            <span class="text-green">U.S Price:</span> <span class="text-white">{{ $comic->price }}</span>
                        </div>
                        <div class="text-uppercase text-green">available</div>
                        <div class="aviability text-white ">Check Aviability</div>
                    </div>
                </div>
                <div class="description mt-3">
                    <p>{{ $comic->description }}</p>
                </div>
                <a href="{{ Route('comics.index') }}" class="btn btn-success">Back</a>
            </div>
        </div>
    </div>
@endsection
