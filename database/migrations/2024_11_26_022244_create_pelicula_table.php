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
        Schema::create('pelicula', function (Blueprint $table) {
            $table->id('pel_id');
            $table->foreignId('gen_id') 
            ->constrained('genero', 'gen_id')
            ->onDelete('cascade');
            $table->foreignId('dir_id') 
            ->constrained('director', 'dir_id')
            ->onDelete('cascade');
            $table->foreignId('for_id') 
            ->constrained('formato', 'for_id')
            ->onDelete('cascade');
            $table->string('pel_nombre', 60);
            $table->decimal('pel_costo', 10, 2);
            $table->date('pel_fec_estreno');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelicula');
    }
};
