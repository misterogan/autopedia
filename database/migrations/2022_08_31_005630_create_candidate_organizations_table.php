<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_organizations', function (Blueprint $table) {
            $table->id();
            $table->integer('candidate_id');
            $table->string('organization_name')->nullable();
            $table->string('activity')->nullable();
            $table->string('organization_position')->nullable();
            $table->string('year_of_entry')->nullable();
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
        Schema::dropIfExists('candidate_organizations');
    }
}
