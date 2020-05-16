<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

     // Relacion de uno a muchos un imagen puede tener muchos comentario

     public function comments(){
         return $this->hasMany('App\Comment');
     }

     // Relacion de uno a muchos un imagen puede tener muchos like

     public function likes(){
         return $this->hasMany('App\Like');
     }

     // relacion de muchos una imagen puede tener un unico usuario

     public function user(){
          return $this->belongsTo('App\User', 'user_id');
     }





}
