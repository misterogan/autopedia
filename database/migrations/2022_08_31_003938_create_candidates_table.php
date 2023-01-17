<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('id_card');
            $table->string('gender');
            $table->string('full_name');
            $table->string('email');
            $table->string('marital_status');
            $table->string('dob');
            $table->string('pob');
            $table->string('religion');
            $table->string('education');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('phone_number')->nullable();
            $table->string('mobile_number');
            $table->string('instagram_account')->nullable();
            $table->string('linkedin_account')->nullable();
            $table->string('facebook_account')->nullable();
            $table->string('twitter_account')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
