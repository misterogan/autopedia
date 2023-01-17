<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateAdditionalInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_additional_informations', function (Blueprint $table) {
            $table->id();
            $table->integer('candidate_id');
            $table->boolean('is_have_applied')->default(false);
            $table->text('is_have_applied_description')->nullable();
            $table->boolean('is_process_in_another_company')->default(false);
            $table->text('is_process_in_another_company_description')->nullable();
            $table->boolean('is_have_friend')->default(false);
            $table->text('is_have_friend_description')->nullable();
            $table->boolean('is_able_to_out_of_town')->default(false);
            $table->text('is_able_to_out_of_town_description')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('candidate_additional_informations');
    }
}
