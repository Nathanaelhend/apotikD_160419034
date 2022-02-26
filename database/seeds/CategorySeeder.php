<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Analgesik Narkotik',
            'description' => 'Obat 1'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Analgesik Non Narkotik',
            'description' => 'Obat 2'
        ]);
    }
}
