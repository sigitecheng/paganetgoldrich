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
        Schema::create('lokasipengajuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            // $table->string('namalengkap');
            $table->string('lokasi');
            $table->text('keteranganlokasi');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokasipengajuans');
    }
};
