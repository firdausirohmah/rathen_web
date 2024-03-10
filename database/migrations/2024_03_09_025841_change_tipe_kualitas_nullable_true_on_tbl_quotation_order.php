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
        Schema::table('tbl_quotation_order', function (Blueprint $table) {
            $table->string('tipe_kualitas', 50)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_quotation_order', function (Blueprint $table) {
            $table->string('tipe_kualitas', 50)->nullable(false)->change();
        });
    }
};
