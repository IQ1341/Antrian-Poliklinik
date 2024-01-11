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
    Schema::table('antrians', function (Blueprint $table) {
        $table->string('nomor_antrian')->change(); // Mengubah tipe data menjadi VARCHAR
    });
}

public function down()
{
    Schema::table('antrians', function (Blueprint $table) {
        $table->integer('nomor_antrian')->change(); // Jika Anda perlu mengembalikan ke tipe data INTEGER
    });
}

};
