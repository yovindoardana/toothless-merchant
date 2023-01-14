<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $merchantId = 'M221018SSGF4138DM';
        // $userId = '62566768';
        // $userServer = '2024';
        // $signature = 'ffbd6b0be219016ea2021f41c2fbec98';
        // $response = Http::get('https://v1.apigames.id/merchant/' . "$merchantId" . '/cek-username/mobilelegend?user_id=' . "$userId" . '(' . "$userServer" . ')' . '&signature=' . "$signature")->json();
        // dd($response);
        // return view('product', compact('response'));
        return view('product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        dd($request->all());
        $merchantId = 'M221018SSGF4138DM';
        $signature = 'ffbd6b0be219016ea2021f41c2fbec98';
        // $data = $request->all();
        $userId = $request->userId;
        $userServer = $request->userServer;
        $response = Http::get('https://v1.apigames.id/merchant/' . "$merchantId" . '/cek-username/mobilelegend?user_id=' . "$userId" . '(' . "$userServer" . ')' . '&signature=' . "$signature")->json();
        $data = [($userId = $request->userId), ($userServer = $request->userServer)];
        return view('product', compact('response', 'data'));
        // dd($userId);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
