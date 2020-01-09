<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',  'first_name', 'last_name', 'gender', 'email', 'password',
        'birthday',  'mobile_number',  'city_id',  'region_id',
        'img_profile',  'activity_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function city(){
        return $this->belongsTo("App\City", "city_id");
    }

    public function region(){
        return $this->belongsTo("App\Region", "region_id");
    }


    public function services(){
        return $this->hasMany("App\Service", "user_id");
    }

    public function votes(){
        return $this->hasMany("App\Vote", "user_id");
    }

    public function comments(){
        return $this->hasMany("App\Comment", "user_id");
    }

    public function rates(){
        return $this->hasMany("App\Rate", "user_id");
    }

    public function favouritesServices(){
    return $this->belongsToMany("App\Service","favourites", "user_id")->orderBy('name_en');
}



}
