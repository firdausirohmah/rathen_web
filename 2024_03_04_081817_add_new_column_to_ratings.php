<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ratings', function (Blueprint $table) {
            $table->char('kesesuaian');
            $table->char('kualitas');
            $table->char('fitur');
            $table->char('waktu_produksi');
            $table->char('pelayanan');
            $table->text('alasan');
            $table->text('penilaian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ratings', function (Blueprint $table) {
            $table->dropColumn('kesesuaian');
            $table->dropColumn('kualitas');
            $table->dropColumn('fitur');
            $table->dropColumn('waktu_produksi');
            $table->dropColumn('pelayanan');
            $table->text('alasan');
            $table->string('penilaian');
        });
    }
};
