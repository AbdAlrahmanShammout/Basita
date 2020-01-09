<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $table = "dayes";

    protected $fillable = [
        'id',  'name',
    ];

    protected $primaryKey = "id";

    public $timestamps = true;


    public function services(){
        return $this->belongsToMany("App\Service","service_dayes", "day_id")->orderBy('name_en');
    }
}
