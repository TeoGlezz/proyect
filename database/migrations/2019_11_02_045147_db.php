<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Db extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     

        Schema::create('evento', function (Blueprint $table) {
            $table->bigIncrements('id_evento');
            $table->string('nombre_res');
            $table->string('nombre_evento');
            $table->string('tipo_evento');
            $table->string('descripcion_evento');
            $table->unsignedBigInteger('id_tipo_evento')->unsigned()->nullable();
            $table->unsignedBigInteger('id_responsable')->unsigned()->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
