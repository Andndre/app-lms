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
        Schema::create('jawaban_kriterias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // point, jawaban relation, kriteria relation
            $table->integer('point');
            $table->foreignId('jawaban_id')->constrained('jawabans')->cascadeOnDelete();
            $table->foreignId('kriteria_id')->constrained('kriterias')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawaban_kriterias');
    }
};
