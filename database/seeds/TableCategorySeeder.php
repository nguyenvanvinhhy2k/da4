<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TableCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[           
            

        ];
        DB::table('categories')->insert($data);
    }
}
