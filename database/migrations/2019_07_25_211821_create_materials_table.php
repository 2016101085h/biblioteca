<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',350);
            $table->integer('language_id')->unsigned();
            $table->integer('edition');
            $table->integer('year');
            $table->integer('material_type_id')->unsigned();
            $table->string('file',300);
            $table->text('abstract');
            $table->string('isbn');
            $table->tinyInteger('is_digital');
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('material_type_id')->references('id')->on('material_types');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
