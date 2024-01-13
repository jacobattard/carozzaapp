<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                'model' => 'Camry',
                'year' => '2010',
                'salesperson_email' => 'joe@carozza.com',
                'manufacturer_id' => 1,
            ],
            [
                'model' => 'Hilux',
                'year' => '2020',
                'salesperson_email' => 'mary@carozza.com',
                'manufacturer_id' => 1,
            ],
            [
                'model' => '330i',
                'year' => '2021',
                'salesperson_email' => 'joe@carozza.com',
                'manufacturer_id' => 2,
            ],
            // Add more data if needed
        ]);
    }
}
