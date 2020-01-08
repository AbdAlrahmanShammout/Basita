<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $fillable = [
        'id',  'user_id' ,'service_id','parent_id','content'
    ];

    protected $primaryKey = "id";

    public $timestamps = true;
}


