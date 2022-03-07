<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    DB::table('admin')->truncate();
    $data=[
        'name'=>'admin',
        'email'=>'admin123@gmail.com',
        'password'=>bcrypt('admin'),
    ];
    DB::table('admin')->insert($data);
    }
}
