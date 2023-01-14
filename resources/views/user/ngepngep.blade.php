@extends('layouts.layout')

@section('main')
    <div class="d-flex justify-content-center">
        <div class="col-2 container mt-3">
            <div class="column">
                <img class="mb-3" src={{ asset('assets/img/1.png') }}>
                <h3>FreeFire</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque molestiae nobis perferendis alias labore, esse reiciendis officiis explicabo fugit, laborum vel eius sint, reprehenderit repellat ut facilis? Quibusdam, ipsam illum?</p>
            </div>
        </div>
        <div class="col-6 bg-info ms-0 me-5 container mt-5 rounded text-white">
            <form class="mt-3" action="">
                <label for="">Insert Player ID</label>
                <input class="form-control" id="userId" type="text" placeholder="Inser User ID">
            </form>
            <form action="">
                <label for="">Choose Item</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Choose diamonds</option>
                    <option value="1">One</option>
                </select>
                <h4>Harga : </h4>
            </form>
            <form action="">
                <label for="">Tumbas!</label>
                <p>Optional: If you want to get proof of payment for your purchase, please fill in the email address</p>
                <input class="form-control" type="email" placeholder="email address">
                <a class="btn btn-success" href="">purchase</a>
            </form>
        </div>
    </div>
@endsection
