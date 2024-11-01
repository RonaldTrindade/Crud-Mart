<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstoqueModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque_models', function (Blueprint $table) {
            $table->id(); // ID auto-increment
            $table->string('descricao'); // Descrição do estoque
            $table->integer('quantidadeDeProdutos'); // Quantidade de produtos
            $table->unsignedBigInteger('user_id')->nullable(); // ID do usuário que criou o estoque
            $table->timestamps(); // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estoque_models');
    }
}



