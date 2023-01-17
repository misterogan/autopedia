<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_work_experiences', function (Blueprint $table) {
            $table->id();
            $table->integer('candidate_id');
            $table->string('company_name')->nullable();
            $table->date('join_date')->nullable();
            $table->date('out_date')->nullable();
            $table->string('position')->nullable();
            $table->text('description')->nullable();
            $table->string('out_reason')->nullable();
            $table->string('last_salary')->nullable();
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
        Schema::dropIfExists('candidate_work_experiences');
    }
}
