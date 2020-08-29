<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesPlanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_planos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_cliente')->unsigned()->nullable(false);
            $table->foreign('id_cliente', 'fk_cp_id_cliente')
                ->references('id')
                ->on('clientes');
            $table->bigInteger('id_plano')->unsigned()->nullable(false);
            $table->foreign('id_plano', 'fk_cp_id_plano')
                ->references('id')
                ->on('planos');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes_planos');
    }
}
