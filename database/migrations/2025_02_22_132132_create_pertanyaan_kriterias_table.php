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
        Schema::create('pertanyaan_kriterias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // point, pertanyaan relation, kriteria relation
            $table->integer('point');
            $table->foreignId('pertanyaan_id')->constrained('pertanyaans')->cascadeOnDelete();
            $table->foreignId('kriteria_id')->constrained('kriterias')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertanyaan_kriterias');
    }
};
