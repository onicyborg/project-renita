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
        Schema::create('pengumpulan_manajemen_risiko', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->enum('pertanyaan_1', ['Ya', 'Tidak']);
            $table->enum('pertanyaan_2', ['Ya', 'Tidak']);
            $table->enum('pertanyaan_3', ['Ya', 'Tidak']);
            $table->enum('pertanyaan_4', ['Ya', 'Tidak']);
            $table->enum('pertanyaan_5', ['Ya', 'Tidak']);
            $table->enum('pertanyaan_6', ['Ya', 'Tidak']);
            $table->enum('pertanyaan_7', ['Ya', 'Tidak']);
            $table->enum('pertanyaan_8', ['Ya', 'Tidak']);
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
        Schema::dropIfExists('pengumpulan_manajemen_risiko');
    }
};
