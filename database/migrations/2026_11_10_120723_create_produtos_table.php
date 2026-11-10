<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->string('marca');
            $table->foreignId('categoria')->constrained();
            $table->decimal('unidade_de_medida', 10, 2);
            $table->decimal('preco_de_custo', 10, 2);
            $table->decimal('preco_de_venda', 10, 2);
            $table->string('quantidade');
            $table->string('estoque_minimo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
