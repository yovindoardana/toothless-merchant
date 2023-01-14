<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($data);
        $data = Game::all();
        $categories = Category::all();
        return view('admin.game', compact('data', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = Category::all();
        // return view('admin.create-game', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required',
            'api_code' => 'required|string',
        ]);

        $image = $request->image->getClientOriginalName();

        Game::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'api_code' => $request->api_code,
            'image' => $image,
        ]);

        $request->image->move(public_path('storage/images/'), $image);
        return redirect('game')->with('success', 'Data Berhasil Masuk');
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
        $data = Game::findOrFail($id);
        $validator = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required',
            'api_code' => 'required|string',
        ]);

        try {
            $image = $request->cover->getClientOriginalName();
            $data->update([
                'name' => $required->name,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'api_code' => $request->api_code,
                'image' => $image,
            ]);
            Storage::delete($image);
            $request->image->move(public_path('storage/images/'), $image);
        } catch (\Throwable $th) {
            $data->update([
                'name' => $request->name,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'api_code' => $request->api_code,
                'image' => $data->image,
            ]);
        }
        return redirect('game')->with('success', 'data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Game::findOrFail($id);
        unlink(public_path('storage/images/' . $data->image));
        $data->delete();
        return redirect('game')->with('success', 'data berhasil dihapus');
    }
}
