<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->date('fecha');
            $table->double('peso', 5,2);
            $table->double('imc', 5,2);
            $table->double('grasa', 5,2);
            $table->double('musculo', 5,2);
            $table->integer('edad');
            $table->integer('gvis');
            $table->double('cuello', 5,2);
            $table->double('pecho', 5,2);
            $table->double('abdomen', 5,2);
            $table->double('cintura', 5,2);
            $table->double('cadera', 5,2);
            $table->string('obervacion');
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
        Schema::dropIfExists('medidas');
    }
}
