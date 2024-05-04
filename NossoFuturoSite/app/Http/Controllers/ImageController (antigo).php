<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images=Image::all();

        return view('images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
  
          $image = new Image;
  
          if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageTitulo = $imagePath->getClientOriginalName();
  
            $path = $request->file('file')->storeAs('uploads', $imageTitulo, 'public');
          }
  
          $image->titulo = $imageTitulo;
          $image->path = '/storage/'.$path;
          $image->save();
  
          return back()->with('success', 'Image uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view('images.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        $image=Image::find($id);
        return view('images.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $request->validate([
            'path'=>'required',
            'titulo'=>'required'
        ]);

        $image=Image::find($id);
        $image->image=$request->get('image');
        $image->title=$request->get('titulo');
        $image->save();

        return redirect('/images')->with('successo', 'Imagem atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image=Image::find($id);
        $image->delete();

        return redirect('/images')->with('successo', 'Imagem apagada!');
    }
}
