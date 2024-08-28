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
        Schema::create('fruits', function (Blueprint $table) {
            $table->id(); // Kolom ID auto-increment
            $table->string('fruit'); // Nama buah
            // Kolom untuk informasi nutrisi
            $table->integer('calories')->nullable(); // Kalori
            $table->decimal('fat', 5, 2)->nullable(); // Lemak (contoh format: 9.99)
            $table->decimal('sodium', 5, 2)->nullable(); // Sodium (contoh format: 999.99)
            $table->decimal('potassium', 5, 2)->nullable(); // Kalium (contoh format: 999.99)
            $table->decimal('carbohydrate', 5, 2)->nullable(); // Karbohidrat (contoh format: 99.99)
            $table->decimal('dietary_fiber', 5, 2)->nullable(); // Serat makanan (contoh format: 9.99)
            $table->decimal('sugar', 5, 2)->nullable(); // Gula (contoh format: 99.99)
            $table->decimal('protein', 5, 2)->nullable(); // Protein (contoh format: 99.99)
            $table->decimal('vit_a', 5, 2)->nullable(); // Vitamin A (contoh format: 999.99 IU)
            $table->decimal('vit_c', 5, 2)->nullable(); // Vitamin C (contoh format: 999.99 mg)
            $table->decimal('calcium', 5, 2)->nullable(); // Kalsium (contoh format: 999.99 mg)
            $table->decimal('iron', 5, 2)->nullable(); // Zat besi (contoh format: 99.99 mg)
             
            $table->softDeletes(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fruits');
    }
};
