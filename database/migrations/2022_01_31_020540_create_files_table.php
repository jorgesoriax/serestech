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
        Schema::create('files', function (Blueprint $table) {
            $table->id();

            $table->string('image_1', 155)->nullable();
            $table->string('image_2', 155)->nullable();
            $table->string('image_3', 155)->nullable();
            $table->string('image_4', 155)->nullable();
            $table->string('image_5', 155)->nullable();
            $table->string('image_6', 155)->nullable();
            $table->string('image_7', 155)->nullable();

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
        Schema::dropIfExists('files');
    }
}
