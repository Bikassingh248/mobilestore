<?php

use App\brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class brandseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('brands')->truncate();
        factory(brand::class,5)->create();
    }
}
