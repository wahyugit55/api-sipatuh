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
    Schema::table('users', function (Blueprint $table) {
        // Menambahkan kolom biometric sebagai string, sesuaikan tipe data sesuai kebutuhan Anda
        $table->string('biometric')->nullable();
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        // Menghapus kolom biometric
        $table->dropColumn('biometric');
    });
}

};
