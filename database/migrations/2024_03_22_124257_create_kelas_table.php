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
    Schema::create('kelas', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->unsignedBigInteger('tingkat_id');
        $table->unsignedBigInteger('jurusan_id');
        $table->timestamps();

        $table->foreign('tingkat_id')->references('id')->on('tingkats')->onDelete('cascade');
        $table->foreign('jurusan_id')->references('id')->on('jurusans')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
