<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums=Album::all();
     return view ('album.index',compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('album.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $album=Album::create([
            'NamaAlbum'=>$request->input('NamaAlbum'),
            'Deskripsi'=>$request->input('Deskripsi'),
            'UserID'=>$request->input('UserID')
        ]);
        if($album){
            return redirect()->route('album.index')->with('pesan','Data Album Berhasil Disimpan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $album = Album::findOrFail($album->id);
        $album->delete();

        if($album){
            return redirect()->route('album.index')->with(['pesan' =>'Data Berhasil Dihapus!']);
        }
    }
}
