<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = "regions";

    protected $fillable = [
        'id',  'name',  'city_id'
    ];

    protected $primaryKey = "id";

    public $timestamps = true;
};
