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
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('murid_id')->constrained()->cascadeOnDelete();
            $table->foreignId('pertemuan_id')->constrained()->cascadeOnDelete();
            $table->enum('kehadiran', ['hadir', 'tanpa_keterangan', 'sakit', 'izin'])->default('hadir')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensis');
    }
};
