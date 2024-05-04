<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();

        return view('comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comments.create');
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
            'article_id'=>'required',
            'comment'=>'required'
        ]);

        $comment = new Comment([
            'user_id' => $request->get('user_id'),
            'article_id' => $request->get('article_id'),
            'comment' => $request->get('comment')
        ]);
        $comment->save();
        return redirect('/comments')->with('success', 'Comment Made!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return view('comments.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        $comment = Comment::find($id);
        return view('comments.edit', compact('comment'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'user_id'=>'required',
            'article_id'=>'required',
            'comment'=>'required'
        ]);

        $comment = Comment::find($id);
        $comment->user_id =  $request->get('user_id');
        $comment->article_id = $request->get('article_id');
        $comment->comment = $request->get('comment');
        $comment->save();

        return redirect('/comments')->with('success', 'Comment updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return redirect('/comments')->with('success', 'Comment deleted!');
    }
}