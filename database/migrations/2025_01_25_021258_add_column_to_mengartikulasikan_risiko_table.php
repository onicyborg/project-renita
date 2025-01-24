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
        Schema::table('mengartikulasikan_risiko', function (Blueprint $table) {
            $table->enum('pertanyaan_4', ['Ya', 'Tidak']);
            $table->enum('pertanyaan_5', ['Ya', 'Tidak']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mengartikulasikan_risiko', function (Blueprint $table) {
            $table->dropColumn('pertanyaan_4');
            $table->dropColumn('pertanyaan_5');
        });
    }
};
