<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Article::all();
        return view('admin.article', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Article::all();
        return view('admin.create-article', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Article::create($request->all());
        // $file = $request->file('picture')->store('img');
        $file = $request->picture->getClientOriginalName();
        
        Article::create([
            'title' => $request->title,
            'author' => $request->author,
            'content' => $request->content,
            'penerbit' => $request->penerbit,
            'picture' => $file,
            
        ]);
        
        $request->picture->move(public_path('assets/img/'), $file);
        return redirect('article')->with('success', 'data berhasil masuk');
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
        $data = Article::find($id);

        return view('admin.edit-article', compact('data'));
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
        $data = Article::find($id);
        Storage::delete($data->picture);

        try {
            $file = $request->file('picture')->store('img');
            $data->update([
                'title' => $request->title,
                'author' => $request->author,
                'content' => $request->content,
                'penerbit' => $request->penerbit,
                'picture' => $file,
            ]);

            } catch (\Throwable $th) {
            $data->update([
                'title' => $request->title,
                'author' => $request->author,
                'content' => $request->content,
                'penerbit' => $request->penerbit,
                'picture' => $data->picture,
            ]);

        return redirect('article')->with('success', 'data berhasil diupdate');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Article::findOrFail($id);
        $data->delete();
        return redirect('article')->with('success', 'data berhasil dihapus');
    }
}
