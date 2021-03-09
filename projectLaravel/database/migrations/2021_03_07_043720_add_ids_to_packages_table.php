<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdsToPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->unsignedBigInteger('internet_id')->nullable()->after('id');
            $table->foreign('internet_id')
            ->references('id')
            ->on('internets')
            ->onDelete('set null')
            ->onUpdate('cascade');
            $table->unsignedBigInteger('cable_id')->nullable()->after('internet_id');
            $table->foreign('cable_id')
            ->references('id')
            ->on('cables')
            ->onDelete('set null')
            ->onUpdate('cascade');
            $table->unsignedBigInteger('telefonia_id')->nullable()->after('cable_id');
            $table->foreign('telefonia_id')
            ->references('id')
            ->on('telefonias')
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
        Schema::table('packages', function (Blueprint $table) {
            $table->dropForeign(['internet_id']);
            $table->dropForeign(['cable_id']);
            $table->dropForeign(['telefonia_id']);
            $table->dropColumn("internet_id");
            $table->dropColumn("cable_id");
            $table->dropColumn("telefonia_id");
        });
    }
}
