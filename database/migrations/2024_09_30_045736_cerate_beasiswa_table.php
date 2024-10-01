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
        Schema::create('beasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_beasiswa');                         // Kolom tipe string
            $table->integer('jumlah_dana');                          // Kolom tipe number
            $table->enum('kategori', ['akademik', 'non-akademik']);  // Kolom tipe enum
            $table->date('tanggal_mulai');                           // Kolom tipe date
            $table->boolean('aktif')->default(false);                // Kolom tipe Boolean
            $table->timestamps();                                    // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
