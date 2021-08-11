<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("files", function (Blueprint $table) {
            $table->id();
            $table->boolean("private");
            $table->string("original_name");
            $table->string("path");
            $table->timestamps();

            $table->foreignId("user_id")->constrained("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("files");
    }
}
