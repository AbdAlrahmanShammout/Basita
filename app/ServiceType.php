<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $table = "service_types";

    protected $fillable = [
        'id',  'name',
    ];

    protected $primaryKey = "id";

    public $timestamps = true;
}
