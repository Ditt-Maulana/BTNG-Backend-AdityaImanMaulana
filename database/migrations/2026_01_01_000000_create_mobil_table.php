<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 120);
            $table->string('brand', 80);
            $table->unsignedBigInteger('harga');
            $table->unsignedSmallInteger('tahun');
            $table->enum('transmisi', ['Manual', 'Matic', 'CVT']);
            $table->enum('bahan_bakar', ['Bensin', 'Diesel', 'Hybrid', 'Listrik']);
            $table->enum('status', ['tersedia', 'sold'])->default('tersedia');
            $table->string('foto', 2048)->nullable();
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('mobil'); }
};
