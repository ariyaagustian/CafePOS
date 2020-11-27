<?php

use Illuminate\Database\Seeder;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merchants')->insert([
            'merchant_name' => 'Kedai Mato - Kopo',
            'merchant_address' => 'Kopo, Bandung',
        ]);
        DB::table('merchants')->insert([
            'merchant_name' => 'Kedai Mato - Dipatiukur',
            'merchant_address' => 'Dipatiukur, Bandung',
        ]);
        DB::table('merchants')->insert([
            'merchant_name' => 'Kedai Mato - Buah Batu',
            'merchant_address' => 'Buah Batu, Bandung',
        ]);
    }
}
