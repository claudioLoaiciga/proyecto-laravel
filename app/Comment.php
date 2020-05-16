<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    // relacion de muchos: un comentario puede tener un unico usuario

     public function user(){
          return $this->belongsTo('App\User', 'user_id');
     }
     // relacion de muchos
     public function image(){
        return $this->belongsTo('App\Image', 'image_id');
   }
}
