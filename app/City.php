<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "cities";

    protected $fillable = [
        'id',  'name' ,
    ];

    protected $primaryKey = "id";

    public $timestamps = true;

    public function users(){
        return $this->hasMany("App\User", "city_id");
    }

}

