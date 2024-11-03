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
        //
        Schema::create('pinjam', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam',100)->nullable(false);
            $table->string('nama_buku',100)->nullable(false);
            $table->unsignedInteger('jumlah_buku')->nullable(false);
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali')->nullable();
            $table->unsignedInteger('denda')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjam');
    }
};
