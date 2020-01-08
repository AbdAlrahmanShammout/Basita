<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = "regions";

    protected $fillable = [
        'id',  'name'
    ];

    protected $primaryKey = "id";

    public $timestamps = true;
};
