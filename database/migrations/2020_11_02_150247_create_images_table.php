<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('data')->create('images', function (Blueprint $table)
        {
            $table->string('id')->unique();
            $table->string('thumbnail_filename')->unique();
            $table->string('image_filename')->unique();
            $table->string('original_filename')->unique();
            $table->integer('height');
            $table->integer('width');
            $table->string('checksum');
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('images');
    }
}
