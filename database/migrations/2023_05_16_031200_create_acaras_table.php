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
        Schema::create('acaras', function (Blueprint $table) {
            $table->id();
            $table->string('nm_acara')->nullable();
            $table->string('foto')->nullable();
            $table->string('tgl_mulai')->nullable();
            $table->string('tgl_selesai')->nullable();
            $table->string('durasi')->nullable();
            $table->text('deskripsi', 4096)->nullable();
            $table->string('foto_acara1')->nullable();
            $table->string('foto_acara2')->nullable();
            $table->string('foto_acara3')->nullable();
            $table->string('foto_acara4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acaras');
    }
};
