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
            $table->string('nm_pemilik')->nullabble();
            $table->string('nm_produk')->nullabble();
            $table->string('harga')->nullabble();
            $table->string('deskripsi')->nullabble();
            $table->string('alamat')->nullabble();
            $table->string('foto')->nullabble();
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
