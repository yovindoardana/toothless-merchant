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
                                <div class="table-responsive">
                                    <table class="tablesorter text-light table" id="tableProduct">
                                        <thead class="">
                                            <tr>
                                                <th class="text-center" rowspan="2">#</th>
                                                <th rowspan="2">Kode Game</th>
                                                <th rowspan="2">Nama Game</th>
                                                <th class="text-center" rowspan="2">Nama Produk</th>
                                                <th class="text-center" colspan="3">Harga</th>
                                                <th class="text-center" rowspan="2">Status</th>
                                                {{-- <th class="text-center" rowspan="2">Actions</th> --}}
                                            </tr>
                                            <tr>
                                                <td>Basic</td>
                                                <td>Premium</td>
                                                <td>Special</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($response['data'] as $item)
                                                @if ($item['status'] == 'available')
                                                    <tr>
                                                        <td class="text-center">{{ $loop->iteration }}</td>
                                                        <td>{{ $item['code'] }}</td>
                                                        <td>{{ $item['game'] }}</td>
                                                        <td class="text-left">{{ $item['name'] }}</td>
                                                        @foreach ($item['price'] as $price)
                                                            <td class="text-right">{{ $price }}</td>
                                                        @endforeach
                                                        <td>{{ $item['status'] }}</td>
                                                        {{-- <td class="d-flex flex-col px-2 text-center">
                                                        <button class="btn btn-info btn-icon btn-sm" data-original-title="" type="button" title="" rel="tooltip">
                                                            <i class="tim-icons icon-single-02"></i>
                                                        </button>
                                                        <button class="btn btn-success btn-icon btn-sm" data-original-title="" type="button" title="" rel="tooltip">
                                                            <i class="tim-icons icon-settings"></i>
                                                        </button>
                                                        <button class="btn btn-danger btn-icon btn-sm" data-original-title="" type="button" title="" rel="tooltip">
                                                            <i class="tim-icons icon-simple-remove"></i>
                                                        </button>
                                                    </td> --}}
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- <div class="d-flex justify-content-center">
                <table class="display border-light text-light mx-auto border" id="tableProduct">
                    <thead class="py-4">
                        <tr>
                            <td class="px-4" rowspan="2">Kode Game</td>
                            <td class="px-4" rowspan="2">Nama Game</td>
                            <td class="px-4" rowspan="2">Nama Produk</td>
                            <td class="px-4" colspan="3">Harga</td>
                        </tr>
                        <tr>
                            <td>Basic</td>
                            <td>Premium</td>
                            <td>Special</td>
                        </tr>
            </thead>
            <tbody>

            </tbody>
            </table>
        </div> --}}
        </div>
    </div>
@endsection
