<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("personas")
            ->insert([
            [
                "nombre" => "David",
                "apellido" => "Proaño",
                "cedula" => "1723025043",
                "telefono" => "0988182490",
            ],
            [
                "nombre" => "Gabriel",
                "apellido" => "Guañuna",
                "cedula" => "15858554",
                "telefono" => "025458557",
            ],
            [
                "nombre" => "Leonardo",
                "apellido" => "Fonseca",
                "cedula" => "172554543",
                "telefono" => "098575585",
            ],
            [
                "nombre" => "Francisco",
                "apellido" => "Salazar",
                "cedula" => "178895585",
                "telefono" => "09875455445",
            ],
        ]);
    }
}
