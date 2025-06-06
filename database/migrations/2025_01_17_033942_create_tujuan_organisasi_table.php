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
        Schema::create('tujuan_organisasi', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->enum('pertanyaan_1', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_2', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_3', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_4', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_5', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_6', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_7', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_8', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_9', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_10', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_11', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_12', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_13', ['1', '2', '3', '4', '5']);
            $table->text('kritik_saran');
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
        Schema::dropIfExists('tujuan_organisasi');
    }
};
