@extends('layouts.layout')
@include('modal.addGameModal')

@section('main')
    <div class="container mt-5 pt-5" style="min-height: 100vh">
        <table class="table">
            <a class="btn btn-primary" data-toggle="modal" data-target="#addGameModal" href="#">Add Game</a>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    {{-- <th scope="col">ID</th> --}}
                    <th scope="col">Game</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">API Code</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($data as $item)
                    <tr>
                        <th scope="row text-center">{{ $loop->iteration }}</th>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['description'] }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item['api_code'] }}</td>
                        <td><img src="{{ asset('storage/images/' . $item->image) }}" alt="" style="max-width: 8rem;"></td>
                        {{-- <td>{{ asset('storage/images/' . $item->image) }}</td> --}}
                        <td>
                            <a class="btn btn-warning" data-toggle="modal" data-target="#editGameModal{{ $item->id }}" href="#">Edit</a>
                            <form action="{{ route('game.destroy', $item->id) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit" href="#">Delete</button>
                            </form>
                        <td>
                    </tr>
                    @include('modal.editGameModal')
                @endforeach
            </tbody>
            <div>
                {{-- {{ $data-> links() }} --}}
            </div>
        </table>
    </div>
@endsection
