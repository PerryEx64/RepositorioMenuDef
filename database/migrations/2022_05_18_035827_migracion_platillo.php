<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigracionPlatillo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platillo', function (Blueprint $table) {
            $table->bigIncrements('id_platillo');
            $table->string('nombre_platillo');
            $table->string('guarnicion_platillo');
            $table->string('precio_platillo');
            $table->unsignedBigInteger('fk_id_tipo_platillo');

            $table->foreign('fk_id_tipo_platillo')
                ->references('id_tipo_platillo')
                ->on('tipo_platillo')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platillo');
    }
}
