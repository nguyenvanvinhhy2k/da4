<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TableUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            'name'=>'vinh',
            'email'=>'vinhhy@gmail.com',
            'password'=>bcrypt('123456')


        ];
        DB::table('users')->insert($data);
    }
}
