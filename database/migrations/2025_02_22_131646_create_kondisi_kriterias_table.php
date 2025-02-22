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
        Schema::create('kondisi_kriterias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // kondisi, point, kriteria relation
            $table->text('kondisi');
            $table->integer('point');
            $table->foreignId('kriteria_id')->constrained('kriterias')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kondisi_kriterias');
    }
};
