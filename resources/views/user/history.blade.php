@extends('layouts.layout')

@section('main')
    <div class="container my-5 py-5" style="min-height: 100vh">
        <a class="btn btn-info" href="/">Home</a>
        <h2 class="my-4">History of Transactions</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Game</th>
                    <th>ID</th>
                    <th>Item</th>
                    <th>Payment</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item['game'] }}</td>
                    <td>{{ $item['idgame'] }}</td>
                    <td>{{ $item['item'] }}</td>
                    <td>{{ $item['payment'] }}</td>
                    <td>{{ $item['created_at'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
