<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nome');

            $table->integer('qtdAlunos')->nullable();

            $table->integer('ativo')->default(1)
            ->comment = '0 = desativado e 1 = ativado';

            $table->integer('projetor')->default(0)
            ->comment = '0 = nao e 1 = sim';

            /** pega o ID do responsável pela sala*/
            $table->bigInteger('usuario_id')->unsigned()->nullable();
            $table->foreign('usuario_id')->references('id')->on('usuarios');

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
        Schema::dropIfExists('salas');
    }
}
