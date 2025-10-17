<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //dropa todas as taabelas e sone novamente
    //php artisan migrate:fresh 
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {
            $table->id();
            $table->string("pessoa_nome", "50");
            $table->text("pessoa_observacao")->nullable();
            $table->boolean("cadastro_ativo")->default(1);
            $table->date("pessoa_data_nascimento")->nullable();
            $table->datetime("pessoa_agendamento")->nullable();
            $table->bigInteger("pessoa_codigo_barras")->nullable();
            
        });
    }

    /*
    
     */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa');
    }
};
