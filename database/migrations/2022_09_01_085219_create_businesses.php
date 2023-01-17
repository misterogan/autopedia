<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinesses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_in')->nullable();
            $table->text('short_description_en')->nullable();
            $table->text('short_description_in')->nullable();
            $table->string('product_image')->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('banner_image_mobile')->nullable();
            $table->string('status',20);
            $table->string('slug');
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
        Schema::dropIfExists('businesses');
    }
}
