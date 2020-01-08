<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $table = "favourites";

    protected $fillable = [
        'id',  'user_id' ,'service_id','start'
    ];

    protected $primaryKey = "id";

    public $timestamps = true;
}


