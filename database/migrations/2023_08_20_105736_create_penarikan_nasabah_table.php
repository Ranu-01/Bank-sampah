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
        Schema::create('penarikan_nasabah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nasabah_id');
            $table->integer('jumlah_penarikan');
            $table->string('status_penarikan');
            $table->dateTime('tanggal_penarikan');
            $table->timestamps();

            $table->foreign('nasabah_id')
                ->references('id')->on('nasabah')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penarikan_nasabah');
    }
};
