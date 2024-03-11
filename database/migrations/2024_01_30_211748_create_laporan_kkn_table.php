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
        Schema::create('laporan_kkn', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('id_kkn',36);  // unsignedBigInteger
            $table->text('isi_laporan');
            $table->date('tanggal_pengumpulan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_kkn');
    }
};
