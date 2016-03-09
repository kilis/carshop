<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('parts', function (Blueprint $table) 
		{
            $table->increments('id');
            $table->string('name');
            $table->integer('sku');
            $table->string('make');
            $table->string('year');
            $table->string('condition');
            $table->string('description');
            $table->float('price');
            $table->string('imageurl');
            $table->string('file_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		 Schema::drop('parts');
    }
}
