<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("vehiculos")
        ->insert([
        [
            "marca" => "Toyota",
            "modelo" => "Yaris",
            "año" => "2004",
        ],
        [
            "marca" => "Chevrolet",
            "modelo" => "Sail",
            "año" => "2000",
        ],
        [
            "marca" => "Hyundai",
            "modelo" => "Tuckson",
            "año" => "2020",
        ],
        [
            "marca" => "Kia",
            "modelo" => "Pregio",
            "año" => "2022",
        ],
    ]);
    }
}
