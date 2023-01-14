@extends('layouts.layout')

@section('main')
    <div class="section section-tabs">
        <div class="container">
            <div class="title">
                <h3 class="mb-3">Article</h3>
            </div>

            <div class="owl-carousel owl-theme">
                @foreach ($data as $article)
                    <div class="item ">
                        <div class="card mx-5" style="width: 18rem;">
                            <img src="{{ asset('assets/img/' . $article->picture) }}" class="card-img-top" alt="..." width="50px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }} </h5>
                                <p class="card-text">{{ $article->content }}</p>
                                <a href="#" class="btn btn-link">Read More</a><br>
                                <a href="{{ url('article/' . $article->id . '/edit')}}" class="btn btn-primary">Edit</button>
                                <a href="{{ url('article/' . $article->id . '/delete') }}" class="btn btn-secondary">Delete</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <a class="btn btn-primary" href="{{ url('article/create') }}">Add Article</a>
    </div>
@endsection
