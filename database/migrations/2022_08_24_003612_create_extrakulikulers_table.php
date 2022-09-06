<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtrakulikulersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extrakulikulers', function (Blueprint $table) {
            $table->id();
            $table->string('nama_extra');
            $table->text('deskripsi');
            $table->string('foto');
            $table->string('penanggung_jawab');
            $table->bigInteger('category_id')->unsigned();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extrakulikulers');
    }
}
