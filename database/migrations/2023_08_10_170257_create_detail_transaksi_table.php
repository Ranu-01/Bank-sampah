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
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaksi_id');
            $table->unsignedBigInteger('sampah_id');
            $table->integer('jumlah_sampah');
            $table->integer('subtotal');
            $table->timestamps();

            $table->foreign('transaksi_id')
                ->references('id')->on('transaksi')
                ->onDelete('cascade');

            $table->foreign('sampah_id')
                ->references('id')->on('sampah')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi');
    }
};
