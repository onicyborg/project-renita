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
        Schema::create('profile_risiko', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->enum('pertanyaan_1_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_1_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_2_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_2_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_3_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_3_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_4_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_4_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_5_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_5_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_6_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_6_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_7_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_7_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_8_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_8_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_9_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_9_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_10_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_10_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_11_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_11_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_12_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_12_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_13_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_13_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_14_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_14_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_15_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_15_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_16_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_16_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_17_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_17_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_18_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_18_terjadi', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_19_dampak', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_19_terjadi', ['1', '2', '3', '4', '5']);
            $table->uuid('form_id');
            $table->uuid('auditee_id');
            $table->timestamps();

            $table->foreign('form_id')->references('id')->on('form');
            $table->foreign('auditee_id')->references('id')->on('auditee');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_resiko');
    }
};
