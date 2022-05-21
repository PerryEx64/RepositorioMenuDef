<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigracionBebida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bebida', function (Blueprint $table) {
            $table->bigIncrements('id_bebida');
            $table->string('nombre_bebida');
            $table->unsignedBigInteger('fk_id_tipo_bebida');
            $table->string('precio_bebida');

            $table->foreign('fk_id_tipo_bebida')
                ->references('id_tipo_bebida')
                ->on('tipo_bebida')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.d
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bebida');
    }
}
