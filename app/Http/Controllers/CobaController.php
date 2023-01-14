<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class CobaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $key = 'cieUHTEgwp5sbrjYv3IL7Z1cAeIRO3w0eiR9taeXRonqd4GJyGfbsRxKIU4WYb7F';
        $sign = 'e3bbb34d98aad87b22155dabb960132f';

        // Cek Profile
        // $response = Http::asForm()
        //     ->post('https://vip-reseller.co.id/api/profile', [
        //         'sign' => 'b195636eca24a97559198f446b822883',
        //         'key' => 'cieUHTEgwp5sbrjYv3IL7Z1cAeIRO3w0eiR9taeXRonqd4GJyGfbsRxKIU4WYb7F',
        //     ])
        //     ->json();

        // Price List
        // $response = Http::asForm()
        //     ->post('https://vip-reseller.co.id/api/game-feature', [
        //         'sign' => 'db584e76d541afa0edc3a1bbb39aff00',
        //         'key' => 'cieUHTEgwp5sbrjYv3IL7Z1cAeIRO3w0eiR9taeXRonqd4GJyGfbsRxKIU4WYb7F',
        //         'type' => 'service',
        //         'filter_type' => 'game',
        //         'filter_value' => 'Mobile Legends B',
        //     ])
        //     ->json();

        // Game List
        $response = Http::asForm()
            ->post('https://vip-reseller.co.id/api/game-feature', [
                'sign' => 'db584e76d541afa0edc3a1bbb39aff00',
                'key' => 'cieUHTEgwp5sbrjYv3IL7Z1cAeIRO3w0eiR9taeXRonqd4GJyGfbsRxKIU4WYb7F',
                'type' => 'service',
                'filter_type' => 'game',
                // 'filter_value' => 'Mobile Legends B',
            ])
            ->json();

        // dd($response);

        return view('coba', compact('response'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
