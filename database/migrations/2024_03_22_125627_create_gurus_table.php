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
    Schema::create('gurus', function (Blueprint $table) {
        $table->id();
        $table->string('nip')->unique();
        $table->string('nama');
        $table->string('jabatan');
        $table->unsignedBigInteger('kelas_id')->nullable();
        $table->string('nomor_hp');
        $table->timestamps();

        $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('set null');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
