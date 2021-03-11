<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdToCanalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('canales', function (Blueprint $table) {
            $table->unsignedBigInteger("cable_id")->nullable()->after("id");
            $table->foreign("cable_id")->references("id")
            ->on("cables")
            ->onDelete('set null')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('canales', function (Blueprint $table) {
            $table->dropForeign(['cable_id']);
            $table->dropColumn("cable_id");
        });
    }
}
