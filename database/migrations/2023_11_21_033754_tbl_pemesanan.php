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
        Schema::create('tbl_pemesanan', function (Blueprint $table){
            $table->id()->autoIncrement();
            $table->string("nama_pelanggan")->nullable();
            $table->string("nama_tim")->nullable();
            $table->bigInteger("no_hp")->nullable();
            $table->dateTime("tgl_pesan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pemesanan');
    }
};
