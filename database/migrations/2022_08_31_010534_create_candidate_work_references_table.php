<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateWorkReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_work_references', function (Blueprint $table) {
            $table->id();
            $table->integer('candidate_id');
            $table->string('reference_name');
            $table->string('reference_address');
            $table->string('reference_phone_number');
            $table->string('reference_position');
            $table->string('reference_relationship');
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
        Schema::dropIfExists('candidate_work_references');
    }
}
