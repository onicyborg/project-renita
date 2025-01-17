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
        Schema::create('strategi_organisasi', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->enum('pertanyaan_1', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_2', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_3', ['1', '2', '3', '4', '5']);
            $table->enum('pertanyaan_4', ['1', '2', '3', '4', '5']);
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
        Schema::dropIfExists('strategi_organisasi');
    }
};