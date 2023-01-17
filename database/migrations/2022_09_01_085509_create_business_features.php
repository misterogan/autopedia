<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessFeatures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_features', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->string('features_title')->nullable();
            $table->text('features_description_en')->nullable();
            $table->text('features_description_in')->nullable();
            $table->string('features_status',20);
            $table->string('features_image')->nullable();
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
        Schema::dropIfExists('business_features');
    }
}
