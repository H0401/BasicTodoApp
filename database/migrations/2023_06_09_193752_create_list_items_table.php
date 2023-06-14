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
        // Metoda, která nám při příkazu {php artisan migrate} vytvoří data z danými typy a jmény
        Schema::create('list_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('isComplete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_items');
    }
};
