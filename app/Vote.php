<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = "service_types";

    protected $fillable = [
        'id',  'comment_id', 'user_id', 'status',
    ];

    protected $primaryKey = "id";

    public $timestamps = true;
}
