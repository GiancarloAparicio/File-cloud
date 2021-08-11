<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRouteIdToFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("files", function (Blueprint $table) {
            $table->renameColumn("path_id", "route_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("files", function (Blueprint $table) {
            $table->renameColumn("route_id", "path_id");
        });
    }
}
