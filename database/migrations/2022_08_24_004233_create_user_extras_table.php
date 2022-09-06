<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_extras', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('biodata_id')->unsigned();
            $table->bigInteger('extrakulikuler_id')->unsigned();
            $table->timestamps();

            $table->foreign('biodata_id')->references('id')->on('biodatas')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('extrakulikuler_id')->references('id')->on('extrakulikulers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_extras');
    }
}
