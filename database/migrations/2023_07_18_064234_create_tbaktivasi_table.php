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
        Schema::create('tbaktivasi', function (Blueprint $table) {
            $table->id();
            $table->string('nmtoko', 25);
            $table->string('kdtoko', 25);
            $table->string('komputer', 25);
            $table->string('periode', 25)->default('');
            $table->string('token')->default('');
            $table->date('tgl_akt')->default('1900-01-01');
            $table->date('tgl_exp')->default('1900-01-01');
            $table->char('flex')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbaktivasi');
    }
};
