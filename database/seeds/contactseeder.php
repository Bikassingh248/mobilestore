<?php

use App\contact;
use Illuminate\Database\Seeder;

class contactseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(contact::class,100)->create();
    }
}
