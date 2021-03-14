<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdToProgramationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('programations', function (Blueprint $table) {
            $table->unsignedBigInteger("canal_id")->nullable()->after("id");
            $table->foreign("canal_id")
            ->references("id")
            ->on("canales")
            ->onDelete('set null')
            ->onUpdate("cascade");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('programations', function (Blueprint $table) {
            $table->dropForeign(['canal_id']);
            $table->dropColumn("canal_id");
        });
    }
}
