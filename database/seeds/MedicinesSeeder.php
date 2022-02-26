<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'Name' => 'fentanil',
            'form' => 'inj 0,05 mg/mL (i.m/i.v.)',
            'formula' => '5 amp/kasus',
            'description' => 'inj: Hanya untuk nyeri berat dan
            harus diberikan oleh tim medis
            yang dapat melakukan
            resusitasi.',
            'faskes 1' => 0,
            'faskes 2' => 1,
            'faskes 3' => 1,
            'Price' => 15000,
            'category_id' => 1
        ]);

        DB::table('medicines')->insert([
            'Name' => 'hidromorfon',
            'form' => 'tab lepas lambat 8 mg',
            'formula' => '30 tab/bulan',
            'description' => '',
            'faskes 1' => 0,
            'faskes 2' => 1,
            'faskes 3' => 1,
            'Price' => 25000,
            'category_id' => 1
        ]);

        DB::table('medicines')->insert([
            'Name' => 'Asam mefenamat',
            'form' => 'kaps 250 mg',
            'formula' => '30 kaps/bulan',
            'description' => '',
            'faskes 1' => 1,
            'faskes 2' => 1,
            'faskes 3' => 1,
            'Price' => 20000,
            'category_id' => 2
        ]);

        DB::table('medicines')->insert([
            'Name' => 'ibuprofen',
            'form' => 'tab 200 mg',
            'formula' => '30 tab/bulan',
            'description' => '',
            'faskes 1' => 1,
            'faskes 2' => 1,
            'faskes 3' => 1,
            'Price' => 30000,
            'category_id' => 2
        ]);
    }
}
