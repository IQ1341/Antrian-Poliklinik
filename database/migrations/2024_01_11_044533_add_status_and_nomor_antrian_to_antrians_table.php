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
            $table->string('status')->default('Menunggu'); // Menambahkan kolom status dengan default 'Menunggu'
            $table->integer('nomor_antrian')->nullable(); // Menambahkan kolom nomor_antrian
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('antrians', function (Blueprint $table) {
            //
        });
    }
};
