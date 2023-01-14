@extends('layouts.layout')

@section('main')
    <div class="container mt-3">
        <h2>Edit Profile</h2>
        <form class="mt-3" action="{{ route('user.update', $data->id) }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label class="form-label" for="disabledTextInput">Username</label>
                <input class="form-control" id="" type="text" name="name" value="{{ $data->name }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="disabledTextInput">Email address</label>
                <input class="form-control" id="" type="email" name="email" value="{{ $data->email  }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" name="password" type="password">
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>
@endsection
