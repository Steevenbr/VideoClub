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
        Schema::create('alquiler', function (Blueprint $table) {
            $table->id('alq_id');
            $table->foreignId('soc_id') 
            ->constrained('socio', 'soc_id')
            ->onDelete('cascade');
            $table->foreignId('pel_id') 
            ->constrained('pelicula', 'pel_id')
            ->onDelete('cascade');
            $table->date('alq_fec_desde');
            $table->date('alq_fec_hasta');
            $table->decimal('alq_valor', 10, 2);
            $table->date('alq_fec_entrega');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquiler');
    }
};
