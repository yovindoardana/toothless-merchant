@extends('layouts.layout')

@section('main')
    <div class="main mt-5 pt-5">
        <div class="container">
            <div id="tables">
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <div class="card card-plain">
                            <div class="card-header">
                                <h4 class="card-title">Product Table</h4>
                            </div>
                            <div class="card-body">
                                <ul>

                                    <li>{{ $request->price }}</li>
                                    <li>{{ $account-> }}</li>
                                    <li>{{ $request-> }}</li>
                                    <li>{{ $request-> }}</li>
                                </ul>
                                <a class="btn btn-warning mt-4" href="#pablo">
                                    Get started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
