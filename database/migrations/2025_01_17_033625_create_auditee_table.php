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
        Schema::create('auditee', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('jabatan');
            $table->string('token');
            $table->uuid('form_id');
            $table->timestamps();

            $table->foreign('form_id')->references('id')->on('form');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auditee');
    }
};
