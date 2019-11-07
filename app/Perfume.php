<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
     protected $table = 'perfumes';

     protected $fillable = ['name','description','','price','extract','category_id','imgPerfume'];

     
      public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
