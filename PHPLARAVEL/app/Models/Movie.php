<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $table = 'movies';
    protected $fillable =  ['name','description','user
    _id','status_id'];
    protected $guarded =  ['id'];
}
