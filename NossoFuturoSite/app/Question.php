<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model{
    protected $table = 'questions';
    protected $fillable = [ 'quizz_id', 'order', 'question', 'rating'];
    public function quiz() {
        return $this->belongsTo('App/Quizz', 'quizz_id', 'id');
    }
    public function answer(){
        return $this->hasMany('App\Models\Answer');
    }
}
