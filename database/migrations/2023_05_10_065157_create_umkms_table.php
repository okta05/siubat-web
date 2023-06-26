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
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('nm_pemilik')->nullable();
            $table->string('nm_produk')->nullable();
            $table->string('harga')->nullable();
            $table->string('no_pemilik')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('alamat')->nullable();
            $table->string('foto')->nullable();
            $table->string('produk1')->nullable();
            $table->string('produk2')->nullable();
            $table->string('produk3')->nullable();
            $table->string('produk4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
