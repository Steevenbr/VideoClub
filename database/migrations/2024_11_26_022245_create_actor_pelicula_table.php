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
        Schema::create('actor_pelicula', function (Blueprint $table) {
            $table->id('pap_id');
            $table->foreignId('act_id') 
            ->constrained('actor', 'act_id')
            ->onDelete('cascade');
            $table->foreignId('pel_id') 
            ->constrained('pelicula', 'pel_id')
            ->onDelete('cascade');
            $table->string('apl_papel', 60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actor_pelicula');
    }
};
