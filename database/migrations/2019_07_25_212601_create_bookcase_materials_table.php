<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookcaseMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookcase_materials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('bookcase_id')->unsigned();
            $table->bigInteger('material_id')->unsigned();
            $table->timestamps();
            $table->foreign('bookcase_id')->references('id')->on('bookcases');
            $table->foreign('material_id')->references('id')->on('materials');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookcase_materials');
    }
}
