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

    public function user(){
        return $this->belongsTo("App\User", "user_id");
    }

    public function comments(){
        return $this->belongsTo("App\Comment", "comment_id");
    }
}
