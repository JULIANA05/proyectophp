<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category_movie extends Model
{
    //
    protected $table = 'category_movie';
    protected $fillable =  ['movie_id','category_id'];
    protected $guarded =  ['id'];
}

