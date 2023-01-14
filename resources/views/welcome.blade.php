@extends('layouts.layout')

@section('main')
    <div class="page-header header-filter">
        <div class="squares square1"></div>
        <div class="squares square2"></div>
        <div class="squares square3"></div>
        <div class="squares square4"></div>
        <div class="squares square5"></div>
        <div class="squares square6"></div>
        <div class="squares square7"></div>
        <div class="container">
            <div class="brand content-center">
                <h1 class="h1-seo">Toothless Merchant</h1>
                <h4>Top up your favorite game's diamond here!</h4>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            @foreach ($games as $game)
                <div class="col">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/images/' . $game->image) }}" alt="logo mlbb" style="min-height: 300px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $game->name }}</h5>
                            <p class="card-text">{{ $game->description }}</p>
                            <a class="btn btn-primary" data-toggle="modal" data-target="#modalOrder{{ $game->id }}" href="#" onclick="showPricelist('{{ $game->id }}', '{{ $game->api_code }}')">Top Up</a>
                        </div>
                    </div>
                </div>
                @include('modal.orderModal')
            @endforeach
        </div>

        <div class="my-5">
            <div class="container">
                <h3 class="text-center">News Update</h3>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum rem cupiditate culpa tempore, error velit quis, facere, et harum unde iste suscipit incidunt voluptatibus asperiores placeat sapiente mollitia ipsam. Odit!</p>
            </div>
            <div class="center">
                <div>

                </div>
            </div>
        </div>
    </div>
@endsection
