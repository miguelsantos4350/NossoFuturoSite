<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
                    'user_id',
                    'title',
                    'text'

         ];
         
    public function user() {
      
        return $this->belongsTo('App\User', 'user_id', 'id');
   }
}