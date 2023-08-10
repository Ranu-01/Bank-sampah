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
        Schema::create('sampah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_sampah_id');
            $table->string('nama_sampah')->unique();
            $table->integer('harga_per_satuan')->default(0);
            $table->string('satuan');
            $table->timestamps();

            $table->foreign('kategori_sampah_id')
                ->references('id')->on('kategori_sampah')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sampah');
    }
};
