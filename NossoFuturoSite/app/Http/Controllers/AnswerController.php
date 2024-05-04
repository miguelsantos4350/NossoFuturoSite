<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers = Answer::all();

        return view('answers.index', compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('answers.create');
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
            'question_id'=>'required',
            'answer'=>'required',
            'is_correct'=>'required'
        ]);

        $answer = new Answer([
            'question_id' => $request->get('question_id'),
            'answer' => $request->get('answer'),
            'is_correct' => $request->get('is_correct')
        ]);
        $answer->save();
        return redirect('/answers')->with('success', 'Article answered!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        return view('answers.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        $answer = Answer::find($id);
        return view('answers.edit', compact('answer'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        $request->validate([
            'question_id'=>'required',
            'answer'=>'required',
            'is_correct'=>'required'
        ]);

        $answer = Answer::find($id);
        $answer->question_id =  $request->get('question_id');
        $answer->answer = $request->get('answer');
        $answer->is_correct = $request->get('is_correct');
        $answer->save();

        return redirect('/answers')->with('success', 'Answer updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        $answer = Answer::find($id);
        $answer->delete();

        return redirect('/answers')->with('success', 'answer deleted!');
    }
}
