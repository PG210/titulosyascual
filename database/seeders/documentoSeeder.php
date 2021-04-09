<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class documentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [//array de datos 
            ['descripcion' => 'Cedula',
            ],
            ['descripcion' => 'Tarjeta identidad',
            ]
        ];
        DB::table('tipodocumento')->insert($datos);
    }
}
