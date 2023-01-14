@extends('layouts.layout')

@section('main')
    <div class="d-flex justify-content-center" style="min-height: 100vh">
        <div class="col-2 container mt-3">
            <div class="column">
                <img src={{ asset('assets/img/mlbb.svg') }}>
                <h3>Mobile Legends</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque molestiae nobis perferendis alias labore, esse reiciendis officiis explicabo fugit, laborum vel eius sint, reprehenderit repellat ut facilis? Quibusdam, ipsam illum?</p>
            </div>
        </div>
        <div class="col-6 bg-info ms-0 me-5 container mt-5 rounded text-white">
            <form class="mt-3" action="">
                <label for="">Insert User ID</label>
                <div class="row">
                    <div class="col">
                        <input class="form-control" id="userId" type="text" placeholder="Inser User ID">
                    </div>
                    <div class="col">
                        <input class="form-control" id="userId" type="text" placeholder="Zone ID">
                    </div>
                </div>
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
