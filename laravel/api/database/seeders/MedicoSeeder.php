<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicos')->insert([
            [
                'nombre' => 'Dario Espinoza',
                'especialidad' => 'Medicina General',
                'hospital' => 'Carlos Andrade Marin'
            ],
            [
                'nombre' => 'Juan Perez',
                'especialidad' => 'Medicina Familiar',
                'hospital' => 'Pablo Arturo Suarez'
            ],
            [
                'nombre' => 'Daniela Moscoso',
                'especialidad' => 'Traumatologia',
                'hospital' => 'Clinica Pasteur'
            ],
            [
                'nombre' => 'David Molina',
                'especialidad' => 'Ginecologia',
                'hospital' => 'Especialidades Quito Sur'
            ],
            [
                'nombre' => 'Maria Fuentes',
                'especialidad' => 'Microbiologia',
                'hospital' => 'Hospital metropolitano'
            ],
            [
                'nombre' => 'Pedro Perez',
                'especialidad' => 'Laboratorista',
                'hospital' => 'Clinica de norte'
            ],
            [
                'nombre' => 'Ana Pastor',
                'especialidad' => 'Urologia',
                'hospital' => 'Hospital Urológico'
            ]
        ]);
    }
}
