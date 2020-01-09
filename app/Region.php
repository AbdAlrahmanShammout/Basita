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

    public function users(){
        return $this->hasMany("App\User", "city_id");
    }

    public function services(){
        return $this->belongsToMany("App\Service","service_region", "region_id")->orderBy('name_en');
    }

};
