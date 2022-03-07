<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class siteseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sites')->truncate();
        $data=[
            'name'=>'MOBILE STORE',
            'slogan'=>'Better Quality, Our Responsibility',
            'mobile_no'=>'9814863608',
            'telephone_no'=>'046521373',
            'address'=>'Birgunj Nepal',
            'logo'=>'img/logo.png',
            'link'=>'',
            'copyright'=>'',
        ];
        DB::table('sites')->insert($data);

    }
}
