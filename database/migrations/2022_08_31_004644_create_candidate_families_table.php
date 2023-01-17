<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_families', function (Blueprint $table) {
            $table->id();
            $table->integer('candidate_id');
            $table->string('family_relationship')->nullable();
            $table->string('family_name')->nullable();
            $table->string('family_gender')->nullable();
            $table->string('family_dob')->nullable();
            $table->string('family_education')->nullable();
            $table->string('family_job')->nullable();
            $table->text('family_description')->nullable();
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
        Schema::dropIfExists('candidate_families');
    }
}
