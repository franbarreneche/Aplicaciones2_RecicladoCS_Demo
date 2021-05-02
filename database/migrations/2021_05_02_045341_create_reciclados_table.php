<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecicladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reciclados', function (Blueprint $table) {
            $table->id();
            $table->enum('transporte',['Pie','Auto','Moto','Camioneta']);
            $table->enum('objeto',['Chatarra','Electronicos','Otros']);
            $table->date('fecha_contacto');
            $table->date('fecha_recoleccion');
            $table->foreignId('ciudadano_id')->constrained();
            $table->foreignId('recolector_id')->constrained('ciudadanos');
            $table->foreignId('centro_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reciclados');
    }
}
