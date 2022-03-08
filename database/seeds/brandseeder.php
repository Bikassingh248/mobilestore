<?php

use App\brand;
use Illuminate\Database\Seeder;

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
        factory(brand::class,200)->create();
    }
}
