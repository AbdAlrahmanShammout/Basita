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

    public function user(){
        return $this->belongsTo("App\User", "user_id");
    }

    public function service(){
        return $this->belongsTo("App\Service", "service_id");
    }

    public function parentComment(){
        return $this->belongsTo("App\Comment", "parent_id");
    }

    public function replays(){
        return $this->hasMany("App\Comment", "parent_id");
    }

    public function votes(){
        return $this->hasMany("App\Vote", "comment_id");
    }



}


