<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntecedentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('estatura', 5,2);
            $table->date('fecha_nacimiento');
            $table->integer('depresion');
            $table->integer('ansiedad');
            $table->integer('gastritis');
            $table->integer('ulcera');
            $table->integer('asma');
            $table->integer('fuma');
            $table->integer('anemia');
            $table->integer('artritis');
            $table->integer('diabetes');
            $table->integer('alergias');
            $table->integer('faltaEnergia');
            $table->integer('estres');
            $table->integer('colesterol');
            $table->integer('suenio');
            $table->integer('insomnio');
            $table->integer('estrenimiento');
            $table->integer('dolores');
            $table->integer('hemorroides');
            $table->integer('osteoporosis');
            $table->integer('colon');
            $table->integer('hipertension');
            $table->integer('medicamentos');
            $table->integer('corazon');
            $table->integer('liquidos');
            $table->integer('menstruales');
            $table->string('alimenticios');
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
        Schema::dropIfExists('antecedentes');
    }
}
