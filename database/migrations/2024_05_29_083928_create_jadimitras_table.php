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
        Schema::create('jadimitras', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Alamat')->nullable();
            $table->string('Nomor_telepon')->nullable();
            $table->string('Email')->nullable();
            $table->date('Tanggal_berdiri')->nullable();
            $table->bigInteger('Kuota_porsi')->nullable();
            $table->string('KTP')->nullable();
            $table->string('Foto_Mitra')->nullable();
            $table->string('Foto_UMKM')->nullable();
            $table->text('Keterangan_Mitra')->nullable(); // Kolom untuk keterangan mitra
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadimitras');
    }
};
