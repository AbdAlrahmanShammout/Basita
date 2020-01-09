<?php

use Illuminate\Database\Seeder;

class CitiesTableDataSeeder extends Seeder
{

    protected $cities = [
        [
            'name' => 'damascus',
        ],
        [
            'name' => 'alepo',
        ],
    ];





    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->cities as $city){
            $city_check = \App\City::
            where(['name' => $city['name']])
                ->where(['name' => $city['name']])
                ->first();

            if (!$city_check){
                $t = new \App\City($city);
                $t->save();
            }
        }
    }
}
