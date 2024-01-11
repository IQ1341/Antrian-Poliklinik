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
        $table->unsignedBigInteger('user_id'); // Menambah kolom user_id
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Menambahkan foreign key constraint
    });
}

public function down()
{
    Schema::table('antrians', function (Blueprint $table) {
        $table->dropForeign(['user_id']); // Menghapus foreign key constraint
        $table->dropColumn('user_id'); // Menghapus kolom user_id
    });
}

};
