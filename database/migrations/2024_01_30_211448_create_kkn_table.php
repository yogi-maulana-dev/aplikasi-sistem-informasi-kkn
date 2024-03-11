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
        Schema::create('kkn', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('id_mahasiswa',36);//             unsignedBigInteger
            $table->char('id_dosen_pembimbing',36);// unsignedBigInteger
            $table->char('id_lokasi_kkn',36);
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('status', 50);
            $table->timestamps();


// unsignedBigInteger

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kkn');
    }
};
