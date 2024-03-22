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
    Schema::create('pelanggarans', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('siswa_id');
        $table->unsignedBigInteger('siswa_kelas_id');
        $table->date('tanggal');
        $table->unsignedBigInteger('jenis_id');
        $table->text('detail');
        $table->timestamps();

        $table->foreign('siswa_id')->references('id')->on('siswas')->onDelete('cascade');
        $table->foreign('siswa_kelas_id')->references('id')->on('kelas')->onDelete('cascade');
        $table->foreign('jenis_id')->references('id')->on('jenis_pelanggarans')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggarans');
    }
};
