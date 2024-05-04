<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $likes = Like::all();

        return view('likes.index', compact('likes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('likes.create');
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
            'user_id'=>'required',
            'article_id'=>'required'
        ]);

        $like = new Like([
            'user_id' => $request->get('user_id'),
            'article_id' => $request->get('article_id')
        ]);
        $like->save();
        return redirect('/likes')->with('success', 'Article Liked!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {
        return view('likes.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function edit(Like $like)
    {
        $like = Like::find($id);
        return view('likes.edit', compact('like'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Like $like)
    {
        $request->validate([
            'user_id'=>'required',
            'article_id'=>'required'
        ]);

        $like = Like::find($id);
        $like->user_id =  $request->get('user_id');
        $like->article_id = $request->get('article_id');
        $like->save();

        return redirect('/likes')->with('success', 'Like updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like)
    {
        $like = Like::find($id);
        $like->delete();

        return redirect('/likes')->with('success', 'Like deleted!');
    }
}
