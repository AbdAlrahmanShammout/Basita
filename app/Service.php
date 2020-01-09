<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";

    protected $fillable = [
        'id',  'type_service_id',  'user_id',  'mobile_number_work'
        ,  'phone_number_work',  'description'
        ,  'available_time',  'work_address',
    ];

    protected $primaryKey = "id";

    public $timestamps = true;


    public function typeServices(){
        return $this->belongsTo("App\ServiceType", "type_service_id");
    }

    public function user(){
        return $this->belongsTo("App\User", "user_id");
    }

    public function rates(){
        return $this->hasMany("App\Rate", "user_id");
    }

    public function comments(){
        return $this->hasMany("App\Comment", "service_id");
    }

    public function regions(){
        return $this->belongsToMany("App\Region","service_region", "service_id")->orderBy('name_en');
    }

    public function days(){
        return $this->belongsToMany("App\Day","service_dayes", "service_id");
    }

    public function favouritesUser(){
        return $this->belongsToMany("App\User","favourites", "service_id")->orderBy('name_en');
    }

}
