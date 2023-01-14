@extends('layouts.layout')

@section('main')
    <div class="container my-5 py-5" style="min-height: 100vh">

        <a class="btn btn-info" href="/"><i class="tim-icons icon-minimal-left mr-2"></i>Home</a>
        <form class="mt-3" action="" method="POST">
            <div class="mb-3">
                <label class="form-label" for="disabledTextInput">Username</label>
                <input class="form-control" id="" type="text">
            </div>
            <div class="mb-3">
                <label class="form-label" for="disabledTextInput">Email address</label>
                <input class="form-control" id="" type="email">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password">
            </div>
            <button class="btn btn-primary" type="submit">Edit</button>
        </form>
    </div>
@endsection
