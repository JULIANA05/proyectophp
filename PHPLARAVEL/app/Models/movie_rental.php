<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class movie_rental extends Model
{
    //
    protected $table = 'movie_rental';
    protected $fillable =  ['price','observations','movie_id','rental_id'];
    protected $guarded =  ['id'];
}
