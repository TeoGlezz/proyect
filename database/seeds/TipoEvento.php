<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoEvento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_evento')->insert([
            "tipo_evento" => "RECOLECCIÓN DE BASURA"
        ]);

        DB::table('tipo_evento')->insert([
            "tipo_evento" => "RECOLECCIÓN DE PLASTICOS"
        ]);

        DB::table('tipo_evento')->insert([
            "tipo_evento" => "LIMPIEZA DE LUGARES PÚBLICOS"
        ]);

        DB::table('tipo_evento')->insert([
            "tipo_evento" => "REFORESTACIÓN"
        ]);

        DB::table('tipo_evento')->insert([
            "tipo_evento" => "CONCIENTIZACIÓN" 
        ]);
    }
}
