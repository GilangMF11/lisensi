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
        Schema::create('tblisensi', function (Blueprint $table) {
            $table->id();
            $table->string('nmpelanggan', 25);
            $table->string('kdtoko', 25)->nullable();
            $table->string('nmtoko' , 25);
            $table->int('jmlkom' , 25);
            $table->string('alamat', 60);
            $table->string('kecamatan', 60);
            $table->string('kabupaten', 60);
            $table->string('provinsi', 60);
            $table->int('kodepos', 10);
            $table->string('notelp', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblisensi');
    }
};
