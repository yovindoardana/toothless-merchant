@extends('layouts.layout')
@include('modal.addCategoryModal')

@section('main')
    <div class="container mt-5 pt-5" style="min-height: 100vh">
        <table class="table">
            <a class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal" href="#">Add Category</a>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $category['name'] }}</td>
                        <td>{{ $category['description'] }}</td>
                        <td>
                            <a class="btn btn-warning" href="#" data->Edit</a>
                            <a class="btn btn-danger" href="#" data->Delete</a>
                        <td>
                            {{-- <td>
                            <a class="btn btn-warning" href="{{ url('game/' . $item->id . '/edit') }}">Edit</a>
                            <a class="btn btn-danger" href="{{ url('game/' . $item->id . '/delete') }}">Delete</a>
                        <td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
