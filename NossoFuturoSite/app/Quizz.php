<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{
    protected $table = 'quizzs';
    protected $fillable = [ 'category', 'title', 'text'];
    public function question(){
        return $this->hasMany('App\Models\Question');
    }
}
