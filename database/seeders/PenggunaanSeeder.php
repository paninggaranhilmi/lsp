<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penggunaan;

class PenggunaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = Penggunaan::create([
            "bulan" => "5",
            "tahun" => "2016",
            "meter_awal" => "3 meter",
            "meter_akhir" => "4 meter"
        ]);
    }
}
