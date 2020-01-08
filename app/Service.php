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

}
