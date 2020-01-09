<?php

use Illuminate\Database\Seeder;

class RegionsTableDataSeeder extends Seeder
{


    protected $regions = [
        [
            'name' => 'mazeh',
            'city_id' => '1',
        ],
        [
            'name' => 'midan',
            'city_id' => '1',
        ],
        [
            'name' => 'bab mosal',
            'city_id' => '1',
        ],
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->regions as $region){
            $region_check = \App\Region::
            where(['name' => $region['name']])
                ->where(['name' => $region['name']])
                ->first();

            if (!$region_check){
                $t = new \App\Region($region);
                $t->save();
            }
        }
    }
}
