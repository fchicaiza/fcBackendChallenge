<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('pacientes')->insert([
            [
                'nombre' => 'Pablo Jimenez',
                'dni' => 1742512410,
                'tipo_sangre' => 'A+'
            ],
            [
                'nombre' => 'Alex Calvache',
                'dni' => 1787451245,
                'tipo_sangre' => 'O+'
            ],
            [
                'nombre' => 'Daniel Cruz',
                'dni' => 1702185112,
                'tipo_sangre' => 'B+'
            ],
            [
                'nombre' => 'Marcelo Cadena',
                'dni' => 1458745412,
                'tipo_sangre' => 'A+'
            ],
            [
                'nombre' => 'Karina Espinoza',
                'dni' => 1745547895,
                'tipo_sangre' => 'AB+'
            ],
            [
                'nombre' => 'Natalia Velez',
                'dni' => 1784599651,
                'tipo_sangre' => 'A+'
            ],
            [
                'nombre' => 'Andrea Jijon',
                'dni' => 1722545801,
                'tipo_sangre' => 'O+'
            ]
        ]);
    }
}
