<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(adminseeder::class);
        $this->call(brandseeder::class);
        $this->call(contactseeder::class);
        $this->call(ProductSeeder::class);
    }
}
