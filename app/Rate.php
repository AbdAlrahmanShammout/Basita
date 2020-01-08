<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = "rates";

    protected $fillable = [
        'id',  'user_id' ,'service_id','start'
    ];

    protected $primaryKey = "id";

    public $timestamps = true;
}
