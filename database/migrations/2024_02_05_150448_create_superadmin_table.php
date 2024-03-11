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
        Schema::create('superadmin', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('namalengkap', 180);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nohp');
            $table->char('token', 100);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superadmin');
    }
};
