<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Eventos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 
            $table->string('evento');
            $table->longText('descripcion');
            $table->unsignedBigInteger('id_tipo_evento');
            $table->unsignedBigInteger('id_responsable');
            $table->tinyInteger('status')->default(1);            
        */
        for($i=0; $i < 50; $i++) {
            DB::table('evento')->insert([
                "evento" => "Recolectemos basúra en nuestra ciudad",
                "descripcion" => "Este es un evento para recolectar basúra en nuestra ciudad de tepic",
                "id_tipo_evento" => 1,
                "id_responsable" => rand(1,50)
            ]);
        }        
    }
}
