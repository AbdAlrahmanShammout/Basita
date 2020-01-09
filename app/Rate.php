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

    public function user(){
        return $this->belongsTo("App\User", "user_id");
    }

    public function service(){
        return $this->belongsTo("App\Service", "service_id");
    }

}
