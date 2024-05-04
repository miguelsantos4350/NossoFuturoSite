<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();

        return view('questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
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
            'quizz_id'=>'required',
            'order'=>'required',
            'question'=>'required',
            'rating'=>'required'
        ]);

        $question = new Question([
            'quizz_id' => $request->get('quizz_id'),
            'order' => $request->get('order'),
            'question' => $request->get('question'),
            'rating' => $request->get('rating')
        ]);
        $question->save();
        return redirect('/questions')->with('success', 'Question created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('questions.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $question = Question::find($id);
        return view('questions.edit', compact('question'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $request->validate([
            'quizz_id'=>'required',
            'order'=>'required',
            'question'=>'required',
            'rating'=>'required'
        ]);

        $question = Question::find($id);
        $question->quizz_id =  $request->get('quizz_id');
        $question->order = $request->get('order');
        $question->question = $request->get('question');
        $question->rating = $request->get('rating');
        $question->save();

        return redirect('/questions')->with('success', 'Question updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question = Question::find($id);
        $question->delete();

        return redirect('/questions')->with('success', 'question deleted!');
    }
}
