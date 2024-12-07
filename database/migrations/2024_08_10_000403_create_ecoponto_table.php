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
        Schema::create('ecopontos', function (Blueprint $table) {
            $table->id();
            $table->char("nome");
            $table->char("endereco");
            $table->decimal("latitude", 10,8);
            $table->decimal("longitude", 11,8);
            $table->text("funcionamento");
            $table->text("descricao");
            $table->text("lixos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecopontos');
    }
};
