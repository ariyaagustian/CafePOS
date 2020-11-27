<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            'unit_name' => 'Kilogram',
            'unit_code' => 'kg',
        ]);
        DB::table('units')->insert([
            'unit_name' => 'Gram',
            'unit_code' => 'g',
        ]);
        DB::table('units')->insert([
            'unit_name' => 'Ons',
            'unit_code' => 'ons',
        ]);
        DB::table('units')->insert([
            'unit_name' => 'Miligram',
            'unit_code' => 'mg',
        ]);
    }
}
