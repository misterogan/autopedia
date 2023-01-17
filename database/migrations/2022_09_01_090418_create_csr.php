<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csr', function (Blueprint $table) {
            $table->id();
            $table->string('action');
            $table->string('reporters_name');
            $table->string('reporters_phone')->nullable();
            $table->string('reporters_address')->nullable();
            $table->string('reporters_email')->nullable();
            $table->string('reported_name')->nullable();
            $table->string('reported_position')->nullable();
            $table->dateTime('incident_date')->nullable();
            $table->string('incident_place')->nullable();
            $table->text('description')->nullable();
            $table->string('nominal')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('csr');
    }
}
