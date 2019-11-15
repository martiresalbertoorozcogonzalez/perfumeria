<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acerca extends Model
{
    protected $table = 'acercas';

    protected $fillable = ['title', 'description', 'image'];
}
