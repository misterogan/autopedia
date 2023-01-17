<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateEmergencyContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_emergency_contacts', function (Blueprint $table) {
            $table->id();
            $table->integer('candidate_id');
            $table->string('emergency_job');
            $table->string('emergency_address');
            $table->string('emergency_relationship');
            $table->string('emergency_contact_number');
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
        Schema::dropIfExists('candidate_emergency_contacts');
    }
}
