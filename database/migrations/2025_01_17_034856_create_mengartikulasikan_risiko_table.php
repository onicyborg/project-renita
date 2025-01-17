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
        Schema::create('mengartikulasikan_risiko', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->enum('pertanyaan_1', ['Ya', 'Tidak']);
            $table->enum('pertanyaan_2', ['Ya', 'Tidak']);
            $table->enum('pertanyaan_3', ['Ya', 'Tidak']);
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
        Schema::dropIfExists('mengartikulasikan_risiko');
    }
};
