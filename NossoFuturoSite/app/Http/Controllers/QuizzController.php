<?php

namespace App\Http\Controllers;

use App\Quizz;
use Illuminate\Http\Request;

class QuizzController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzs = Quizz::all();

        return view('quizzs.index', compact('quizzs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quizzs.create');
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
            'category'=>'required',
            'title'=>'required',
            'text'=>'required'
        ]);

        $quizz = new Quizz([
            'category' => $request->get('category'),
            'title' => $request->get('title'),
            'text' => $request->get('text')
        ]);
        $quizz->save();
        return redirect('/quizzs')->with('success', 'Quizz created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quizz  $quizz
     * @return \Illuminate\Http\Response
     */
    public function show(Quizz $quizz)
    {
        return view('quizzs.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quizz  $quizz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quizz $quizz)
    {
        $quizz = Quizz::find($id);
        return view('quizzs.edit', compact('quizz'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quizz  $quizz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quizz $quizz)
    {
        $request->validate([
            'category'=>'required',
            'title'=>'required',
            'text'=>'required'
        ]);

        $quizz = Quizz::find($id);
        $quizz->category =  $request->get('category');
        $quizz->title = $request->get('title');
        $quizz->text =  $request->get('text');
        $quizz->save();

        return redirect('/quizzs')->with('success', 'Quizz updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quizz  $quizz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quizz $quizz)
    {
        $quizz = Quizz::find($id);
        $quizz->delete();

        return redirect('/quizzs')->with('success', 'Quizz deleted!');
    }
}
