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
        Schema::table('evaluasi_manajemen_risiko', function (Blueprint $table) {
            $table->enum('pertanyaan_8', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_9', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_10', ['Ya', 'Tidak'])->nullable();
        });

        Schema::table('arahan_manajemen_risiko', function (Blueprint $table) {
            $table->enum('pertanyaan_6', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_7', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_8', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_9', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_10', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_11', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_12', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_13', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_14', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_15', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_16', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_17', ['Ya', 'Tidak'])->nullable();
        });

        Schema::table('pemantauan_manajemen_risiko', function (Blueprint $table) {
            $table->enum('pertanyaan_5', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_6', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_7', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_8', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_9', ['Ya', 'Tidak'])->nullable();
            $table->enum('pertanyaan_10', ['Ya', 'Tidak'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evaluasi_manajemen_risiko', function (Blueprint $table) {
            $table->dropColumn(['pertanyaan_8', 'pertanyaan_9', 'pertanyaan_10']);
        });

        Schema::table('arahan_manajemen_risiko', function (Blueprint $table) {
            $table->dropColumn([
                'pertanyaan_6',
                'pertanyaan_7',
                'pertanyaan_8',
                'pertanyaan_9',
                'pertanyaan_10',
                'pertanyaan_11',
                'pertanyaan_12',
                'pertanyaan_13',
                'pertanyaan_14',
                'pertanyaan_15',
                'pertanyaan_16',
                'pertanyaan_17',
            ]);
        });

        Schema::table('pemantauan_manajemen_risiko', function (Blueprint $table) {
            $table->dropColumn([
                'pertanyaan_5',
                'pertanyaan_6',
                'pertanyaan_7',
                'pertanyaan_8',
                'pertanyaan_9',
                'pertanyaan_10',
            ]);
        });
    }
};
