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
        Schema::create('tbl_quotation', function (Blueprint $table) {
            $table->string('kd_quotation')->primary();
            $table->string("nama_pelanggan")->nullable();
            $table->string("no_hp")->nullable();
            $table->string('email')->nullable();
            $table->string("alamat")->nullable();
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
        Schema::dropIfExists('tbl_quotation');
    }
};
