<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPackageIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //se crea la columna package_id y se le dice que es una clave foranea
            $table->unsignedBigInteger("package_id")->nullable()->after("id");
            $table->foreign('package_id')
            ->references('id')
            ->on('packages')
            ->onDelete("set null")
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
        Schema::table('users', function (Blueprint $table) {
           $table->dropForeign(['package_id']);
           $table->dropColumn("package_id");
        });
    }
}
