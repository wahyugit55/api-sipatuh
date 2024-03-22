<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('wali_murids', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->unsignedBigInteger('siswa_id');
        $table->unsignedBigInteger('siswa_kelas_id');
        $table->enum('status', ['Ayah', 'Ibu']);
        $table->string('nomor_hp');
        $table->timestamps();

        $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');
        $table->foreign('siswa_kelas_id')->references('id')->on('kelas')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wali_murids');
    }
};
